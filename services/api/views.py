import json

from django.views import View
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt
from django.utils.decorators import method_decorator

from api.models import *
from api.recommender import Recommender

class FoodRecommendationsView(View):

    @method_decorator([csrf_exempt])
    def post(self, request):
        data = json.loads(request.body.decode("utf-8"))
        food = Recommender(data)
        result = food.recommender()
        return JsonResponse({"data": result})
