import json

from django.views import View
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt
from django.utils.decorators import method_decorator

from api.models import *
from api.db import *
from api.recommender import Recommender

# --- CLASS yang paling sederhana --- #
class FeedbackView(View):

    @method_decorator([csrf_exempt])
    def post(self, request):
        data = json.loads(request.body.decode("utf-8"))
        save_feedback(**data)
        return JsonResponse({"message": "ok"})

# --- CLASS yang sedang --- #
class MoodView(View):

    @method_decorator([csrf_exempt])
    def get(self, request):
        data = Mood.objects.all()
        return JsonResponse({"data": data})
    
    @method_decorator([csrf_exempt])
    def post(self, request):
        """
        contoh payload -> {"mood_id":1, "pasien_id":1, "heartRate":1}
        """
        # todo: ambil data pasien dari session bukan dari payload
        data = json.loads(request.body.decode("utf-8"))
        save_mood_track(data)
        return JsonResponse({"message": "ok"})

# --- CLASS yang paling sulit/menggunakan AI --- #
class FoodRecommendationsView(View):

    @method_decorator([csrf_exempt])
    def post(self, request):
        data = json.loads(request.body.decode("utf-8"))
        food = Recommender(data)
        result = food.recommender()
        return JsonResponse({"data": result})
