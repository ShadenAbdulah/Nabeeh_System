# -*- coding: utf-8 -*-
import pandas as pd
# from joblib import load
from Features import FeatureEng
import sys 
import os
import pickle
print(os.environ)

sampleID = sys.argv[1]  # Get file path from command line argument
path = f'/home/u894522242/public_html/system/storage/app/system_users/{sampleID}'
scalerPath = '/home/u894522242/public_html/system/files/scalers'
# ZL_trace
ZL_trace_exper1 = pd.read_csv(path+'/1-ZL_trace.csv').reset_index()
ZL_trace_exper2 = pd.read_csv(path+'/3-ZL_trace.csv').reset_index()
ZL_trace_exper3 = pd.read_csv(path+'/5-ZL_trace.csv').reset_index()
ZL_trace_experiment = pd.concat([ZL_trace_exper1, ZL_trace_exper2, ZL_trace_exper3]).reset_index()
ZL_trace_raw = ZL_trace_experiment.drop(columns=['index'])

# ZL_predict
ZL_predict_exper1 = pd.read_csv(path+'/2-ZL_predict.csv').reset_index()
ZL_predict_exper2 = pd.read_csv(path+'/4-ZL_predict.csv').reset_index()
ZL_predict_exper3 = pd.read_csv(path+'/6-ZL_predict.csv').reset_index()
ZL_predict_experiment = pd.concat([ZL_predict_exper1, ZL_predict_exper2, ZL_predict_exper3]).reset_index()
ZL_predict_raw = ZL_predict_experiment.drop(columns=['index'])

# PL_trace
PL_trace_exper1 = pd.read_csv(path+'/7-PL_trace.csv').reset_index()
PL_trace_exper2 = pd.read_csv(path+'/9-PL_trace.csv').reset_index()
PL_trace_exper3 = pd.read_csv(path+'/11-PL_trace.csv').reset_index()
PL_trace_experiment = pd.concat([PL_trace_exper1, PL_trace_exper2, PL_trace_exper3]).reset_index()
PL_trace_raw = PL_trace_experiment.drop(columns=['index'])

# PL_predict
PL_predict_exper1 = pd.read_csv(path+'/8-PL_predict.csv').reset_index()
PL_predict_exper2 = pd.read_csv(path+'/10-PL_predict.csv').reset_index()
PL_predict_exper3 = pd.read_csv(path+'/12-PL_predict.csv').reset_index()
PL_predict_experiment = pd.concat([PL_predict_exper1, PL_predict_exper2, PL_predict_exper3]).reset_index()
PL_predict_raw = PL_predict_experiment.drop(columns=['index'])


ZL_trace = FeatureEng(ZL_trace_raw, ZL_trace_exper1, ZL_trace_exper2, ZL_trace_exper3)
ZL_predict = FeatureEng(ZL_predict_raw, ZL_predict_exper1, ZL_predict_exper2, ZL_predict_exper3)
PL_trace = FeatureEng(PL_trace_raw, PL_trace_exper1, PL_trace_exper2, PL_trace_exper3)
PL_predict = FeatureEng(PL_predict_raw, PL_predict_exper1, PL_predict_exper2, PL_predict_exper3)


# def scalerFun(taskdf, snum): 
    
#         scaler = load(scalerPath + f'/scaler{snum}.joblib')
        
#         feature_indices = [[6, 7, 20, 28],[2, 6, 8, 20, 25],[4, 6, 10, 15, 22, 26, 27],[2, 3, 4, 6, 7, 8, 9, 14, 24]]
#         x = taskdf.iloc[:, feature_indices[snum-1]]
#         x_standardized = scaler.transform(x)
#         payload = x_standardized.to_csv(index=False, header=False).encode('utf-8')
#         return payload

def scalerFun(taskdf, snum): 

    with open(scalerPath + f'/scaler{snum}.pickle', 'rb') as file:
        scaler = pickle.load(file)
        
    feature_indices = [[6, 7, 20, 28],[2, 6, 8, 20, 25],[4, 6, 10, 15, 22, 26, 27],[2, 3, 4, 6, 7, 8, 9, 14, 24]]
    x = taskdf.iloc[:, feature_indices[snum-1]]
    x_standardized = scaler.transform(x)
    
    x_standardized_df = pd.DataFrame(x_standardized, columns=x.columns)
    payload = x_standardized_df.to_csv(index=False, header=False).encode('utf-8')
    return payload

# A helper function to save the encoded payload to a file
def save_payload_to_csv(payload, filename):
    file_path = os.path.join(path, filename)
    with open(file_path, 'wb') as file:  # Note: 'wb' mode because payload is encoded
        file.write(payload)

# Prepare your data
ZL_trace_payload = scalerFun(ZL_trace, 1)
ZL_predict_payload = scalerFun(ZL_predict, 2)
PL_trace_payload = scalerFun(PL_trace, 3)
PL_predict_payload = scalerFun(PL_predict, 4)

# Save each payload to a CSV file
save_payload_to_csv(ZL_trace_payload, 'ZL_trace.csv')
save_payload_to_csv(ZL_predict_payload, 'ZL_predict.csv')
save_payload_to_csv(PL_trace_payload, 'PL_trace.csv')
save_payload_to_csv(PL_predict_payload, 'PL_predict.csv')