import pandas as pd
import numpy as np

from copy import deepcopy
from api.models import Food
from scipy.spatial import distance
from sklearn.neighbors import NearestNeighbors

NUT_DAILY_VALUES = {
    "calories": 2000,
    "carbohydrates": 300,
    "cholesterol": 0.003,
    "fat" : 65,
    "fiber": 25,
    "proteins": 50
}

NUT_NAMES_MAP = {
    "calories" : "energy",
    "carbohydrates": "carbo",
    "cholesterol": "cholesterol",
    "fat" : "fat",
    "fiber": "fiber",
    "proteins": "protein"
}

class Recommender:

    def __init__(self, input_data):
        self.df = None
        self.input_data = input_data

    def get_data_from_db(self):
        food = Food.objects.all()
        return food.query.values()
    
    def get_converted_data(self):
        data = self.get_data_from_db(self)
        self.df = pd.DataFrame.from_records(data)

        return deepcopy(self.df)
    
    def normalize_df(self):
        df = self.get_converted_data()
        for key, val in NUT_DAILY_VALUES.items():
            column = NUT_NAMES_MAP[key]
            df[column] /= val
            df[column] *= 2
        
        return df

    def input_data_helper(self):
        calories = float(self.input_data['energy'])
        cholesterol = float(self.input_data['cholestrol'])
        carbohydrates = float(self.input_data['carbo'])
        fat = float(self.input_data['fat'])
        fiber = float(self.input_data['fiber'])
        proteins = float(self.input_data['protein'])
        inp = [[(NUT_DAILY_VALUES["calories"] - calories) / NUT_DAILY_VALUES["calories"], 
                (NUT_DAILY_VALUES["carbohydrates"] - carbohydrates) / NUT_DAILY_VALUES["carbohydrates"] ,
                (NUT_DAILY_VALUES["proteins"] - proteins) / NUT_DAILY_VALUES["proteins"] ,
                (NUT_DAILY_VALUES["fat"] - fat) / NUT_DAILY_VALUES["fat"],
                (NUT_DAILY_VALUES["fiber"] - fiber),
                (NUT_DAILY_VALUES["cholesterol"] - cholesterol)]]
        
        return inp

    def recommender(self):
        nutrition_df = self.get_converted_data()
        nutrition_values_df = self.normalize_df()
        
        knn = NearestNeighbors(n_neighbors=5,
                            algorithm='ball_tree',
                            metric="euclidean").fit(nutrition_values_df)
        
        distances, indices = knn.kneighbors(self.input_data_helper(), n_neighbors=3)
        
        recommended_products = []
        for i in indices[0]:
            temp = {}
            temp['product_name'] = nutrition_df.loc[i]['product_name']
            temp['pic_url'] = nutrition_df.loc[i]['pic_url']
            recommended_products.append(temp)

        return recommended_products

