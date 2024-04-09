# -*- coding: utf-8 -*-
import pandas as pd
import sys 
import os
import pickle
import traceback

print("Starting script... Environment variables:", os.environ)

try: 
    sampleID = sys.argv[1]  # Get file path from command line argument
    print(f"Sample ID: {sampleID}")

    path = f'/home/u894522242/public_html/system/storage/app/system_users/{sampleID}'
    print(f"Data path set to: {path}")

    scalerPath = '/home/u894522242/public_html/system/storage/app/public/files/scalers'
    print(f"Scaler path set to: {scalerPath}")

    # Loading and concatenating ZL_trace experiments
    print("Loading ZL_trace data...")
    ZL_trace_exper1 = pd.read_csv(path+'/1-ZL_trace.csv').reset_index()
    ZL_trace_exper2 = pd.read_csv(path+'/3-ZL_trace.csv').reset_index()
    ZL_trace_exper3 = pd.read_csv(path+'/5-ZL_trace.csv').reset_index()
    ZL_trace_experiment = pd.concat([ZL_trace_exper1, ZL_trace_exper2, ZL_trace_exper3]).reset_index(drop=True)
    ZL_trace_raw = ZL_trace_experiment.drop(columns=['index'])
    print("ZL_trace data loaded and concatenated.")

    # Loading and concatenating ZL_predict experiments
    print("Loading ZL_predict data...")
    ZL_predict_exper1 = pd.read_csv(path+'/2-ZL_predict.csv').reset_index()
    ZL_predict_exper2 = pd.read_csv(path+'/4-ZL_predict.csv').reset_index()
    ZL_predict_exper3 = pd.read_csv(path+'/6-ZL_predict.csv').reset_index()
    ZL_predict_experiment = pd.concat([ZL_predict_exper1, ZL_predict_exper2, ZL_predict_exper3]).reset_index(drop=True)
    ZL_predict_raw = ZL_predict_experiment.drop(columns=['index'])
    print("ZL_predict data loaded and concatenated.")

    # PL_trace    
    print("Loading PL_trace data...")
    PL_trace_exper1 = pd.read_csv(path+'/7-PL_trace.csv').reset_index()
    PL_trace_exper2 = pd.read_csv(path+'/9-PL_trace.csv').reset_index()
    PL_trace_exper3 = pd.read_csv(path+'/11-PL_trace.csv').reset_index()
    PL_trace_experiment = pd.concat([PL_trace_exper1, PL_trace_exper2, PL_trace_exper3]).reset_index()
    PL_trace_raw = PL_trace_experiment.drop(columns=['index'])

    # PL_predict
    print("Loading PL_predict data...")
    PL_predict_exper1 = pd.read_csv(path+'/8-PL_predict.csv').reset_index()
    PL_predict_exper2 = pd.read_csv(path+'/10-PL_predict.csv').reset_index()
    PL_predict_exper3 = pd.read_csv(path+'/12-PL_predict.csv').reset_index()
    PL_predict_experiment = pd.concat([PL_predict_exper1, PL_predict_exper2, PL_predict_exper3]).reset_index()
    PL_predict_raw = PL_predict_experiment.drop(columns=['index'])
    # Feature Engineering
    print("Applying Feature Engineering...")
    from Features import FeatureEng  # Import here to catch any import errors
    ZL_trace = FeatureEng(ZL_trace_raw, ZL_trace_exper1, ZL_trace_exper2, ZL_trace_exper3)
    ZL_predict = FeatureEng(ZL_predict_raw, ZL_predict_exper1, ZL_predict_exper2, ZL_predict_exper3)
    PL_trace = FeatureEng(PL_trace_raw, PL_trace_exper1, PL_trace_exper2, PL_trace_exper3)
    PL_predict = FeatureEng(PL_predict_raw, PL_predict_exper1, PL_predict_exper2, PL_predict_exper3)
    print("Feature Engineering applied.")

    # Scaling function
    def scalerFun(taskdf, snum): 
        try:
            print(f"Scaling data with scaler number {snum}...")
            with open(scalerPath + f'/scaler{snum}.pickle', 'rb') as file:
                scaler = pickle.load(file)

            feature_indices = [[6, 7, 20, 28],[2, 6, 8, 20, 25],[4, 6, 10, 15, 22, 26, 27],[2, 3, 4, 6, 7, 8, 9, 14, 24]]
            x = taskdf.iloc[:, feature_indices[snum-1]]
            x_standardized = scaler.transform(x)

            x_standardized_df = pd.DataFrame(x_standardized, columns=x.columns)
            payload = x_standardized_df.to_csv(index=False, header=False).encode('utf-8')
            print(f"Data scaled successfully with scaler number {snum}.")
            return payload
        except Exception as e:
            print(f"Error in scalerFun with scaler number {snum}: {str(e)}", file=sys.stderr)
            raise e

    # A helper function to save the encoded payload to a file
    def save_payload_to_csv(payload, filename):
        try:
            file_path = os.path.join(path, filename)
            print(f"Saving payload to {file_path}...")
            with open(file_path, 'wb') as file:  # Note: 'wb' mode because payload is encoded
                file.write(payload)
            print(f"Payload saved to {file_path}.")
        except Exception as e:
            print(f"Error saving payload to {filename}: {str(e)}", file=sys.stderr)
            raise e

    # Prepare and save your data
    print("Preparing and saving data...")
    save_payload_to_csv(scalerFun(ZL_trace, 1), 'ZL_trace.csv')
    save_payload_to_csv(scalerFun(ZL_predict, 2), 'ZL_predict.csv')
    save_payload_to_csv(scalerFun(PL_trace, 3), 'PL_trace.csv')
    save_payload_to_csv(scalerFun(PL_predict, 4), 'PL_predict.csv')
    print("Data preparation and saving completed successfully.")

    print("Script executed successfully.")
except Exception as e:
    print(f"Unhandled exception: {e}")
    traceback.print_exc()
