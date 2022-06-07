from django.db import models

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