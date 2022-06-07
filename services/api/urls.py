from django.urls import path

from api import views

urlpatterns = [
    path('food/', views.FoodRecommendationsView.as_view()),
]
