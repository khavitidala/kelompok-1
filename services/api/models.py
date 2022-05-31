from django.db import models

class Mood(models.Model):
    name = models.CharField(max_length=30, null=True, blank=True)

class MoodTracking(models.Model):
    mood = models.ForeignKey("Mood", on_delete=models.CASCADE, null=True, blank=True)
    pasien = models.ForeignKey("Pasien", on_delete=models.CASCADE, null=True, blank=True)
    heartRate = models.FloatField(null=True, blank=True)
    created_at = models.DateTimeField(auto_now_add=True)

class Obat(models.Model):
    nama = models.CharField(max_length=512, null=True, blank=True)
    jenis = models.CharField(max_length=512, null=True, blank=True)
    harga = models.FloatField(null=True, blank=True)

class PaketObat(models.Model):
    obat = models.ForeignKey("Obat", on_delete=models.CASCADE, null=True, blank=True)
    akun = models.ForeignKey("Akun", on_delete=models.CASCADE, null=True, blank=True)
    created_at = models.DateTimeField(auto_now_add=True)
    status = models.CharField(max_length=100, null=True, blank=True)

class Food(models.Model):
    nama = models.CharField(max_length=512, null=False, blank=False)
    energy = models.FloatField(null=True, blank=True)
    carbo = models.FloatField(null=True, blank=True)
    sugar = models.FloatField(null=True, blank=True)
    protein = models.FloatField(null=True, blank=True)
    fat = models.FloatField(null=True, blank=True)
    fiber = models.FloatField(null=True, blank=True)
    cholestrol = models.FloatField(null=True, blank=True)
    pic_url = models.FloatField(null=True, blank=True)