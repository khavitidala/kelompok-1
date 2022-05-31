from django.db import models

class Akun(models.Model):
    username = models.CharField(max_length=256, null=False, blank=False)
    password = models.CharField(max_length=256, null=False, blank=False)
    is_admin = models.BooleanField(default=False)

class Konselor(models.Model):
    akun = models.ForeignKey("Akun", on_delete=models.CASCADE)
    nama = models.CharField(max_length=512, null=True, blank=True)
    date_employee = models.DateField(null=True, blank=True)
    nomor_induk = models.CharField(max_length=30, null=True, blank=True)
    tipe = models.CharField(max_length=30, null=False, blank=False)

class Pasien(models.Model):
    akun = models.ForeignKey("Akun", on_delete=models.CASCADE)
    nama = models.CharField(max_length=512, null=True, blank=True)
    nomor_induk = models.CharField(max_length=30, null=True, blank=True)
    tgl_lahir = models.DateField(null=True, blank=True)
    alamat_tinggal = models.CharField(max_length=512, null=True, blank=True)
    alamat_kirim = models.CharField(max_length=512, null=True, blank=True)
    email = models.CharField(max_length=100, null=True, blank=True)
    no_hp = models.CharField(max_length=20, null=True, blank=True)

class KonsultasiRecord(models.Model):
    konselor = models.ForeignKey("Konselor", on_delete=models.CASCADE, null=True, blank=True)
    pasien = models.ForeignKey("Pasien", on_delete=models.CASCADE, null=True, blank=True)
    diagnosa = models.CharField(max_length=512, null=True, blank=True)
    treatment = models.CharField(max_length=512, null=True, blank=True)
    created_at = models.DateTimeField(auto_now_add=True)

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

class Feedback(models.Model):
    created_at = models.DateTimeField(auto_now_add=True)
    feedback = models.CharField(max_length=512, null=True, blank=True)