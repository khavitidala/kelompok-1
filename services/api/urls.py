from django.urls import path

from api import views

urlpatterns = [
    path('mood/', views.MoodView.as_view()),
    path('food/', views.FoodRecommendationsView.as_view()),
]
