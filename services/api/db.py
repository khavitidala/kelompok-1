from api.models import *

def save_feedback(**data):
    feed = Feedback.objects.create(**data)
    feed.save()

def save_mood_track(data):
    pasien = Pasien.objects.get(pk=data["pasien_id"])
    mood = Mood.objects.get(pk=data["mood_id"])
    heart_rate = data["heart_rate"]

    mts = MoodTracking.objects.create(pasien=pasien, mood=mood, heart_rate=heart_rate)
    mts.save()
