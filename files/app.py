# -*- coding: utf-8 -*-
import pandas as pd
from joblib import load
import sys
import json 
import math
import numpy as np
import statistics as stat

path = sys.argv[1]  # Get file path from command line argument
model_filename = sys.argv[2]
trained_model = load(model_filename)

# # ZL_trace
# ZL_trace_exper1 = pd.read_csv(path+'/1-ZL_trace.csv')
# ZL_trace_exper2 = pd.read_csv(path+'/3-ZL_trace.csv')
# ZL_trace_exper3 = pd.read_csv(path+'/5-ZL_trace.csv')
# ZL_trace_experiment = pd.concat([ZL_trace_exper1, ZL_trace_exper2, ZL_trace_exper3]).reset_index()
# ZL_trace_raw = ZL_trace_experiment.drop(columns=['index'])

# # ZL_predict
# ZL_predict_exper1 = pd.read_csv(path+'/2-ZL_predict.csv')
# ZL_predict_exper2 = pd.read_csv(path+'/4-ZL_predict.csv')
# ZL_predict_exper3 = pd.read_csv(path+'/6-ZL_predict.csv')
# ZL_predict_experiment = pd.concat([ZL_predict_exper1, ZL_predict_exper2, ZL_predict_exper3]).reset_index()
# ZL_predict_raw = ZL_predict_experiment.drop(columns=['index'])

# # PL_trace
# PL_trace_exper1 = pd.read_csv(path+'/7-PL_trace.csv')
# PL_trace_exper2 = pd.read_csv(path+'/9-PL_trace.csv')
# PL_trace_exper3 = pd.read_csv(path+'/11-PL_trace.csv')
# PL_trace_experiment = pd.concat([PL_trace_exper1, PL_trace_exper2, PL_trace_exper3]).reset_index()
# PL_trace_raw = PL_trace_experiment.drop(columns=['index'])

# PL_predict
PL_predict_exper1 = pd.read_csv(path+'/8-PL_predict.csv')
PL_predict_exper2 = pd.read_csv(path+'/10-PL_predict.csv')
PL_predict_exper3 = pd.read_csv(path+'/12-PL_predict.csv')
PL_predict_experiment = pd.concat([PL_predict_exper1, PL_predict_exper2, PL_predict_exper3]).reset_index()
PL_predict_raw = PL_predict_experiment.drop(columns=['index'])


def FeatureEng(df , exper1, exper2, exper3):

    output = pd.DataFrame()
    # Wacom sitting
    exper1['ClientX'] = exper1['ClientX'] * (3840 / 2000)
    exper2['ClientX'] = exper2['ClientX'] * (3840 / 2000)
    exper3['ClientX'] = exper3['ClientX'] * (3840 / 2000)
    df['ClientX'] = df['ClientX'] * (3840 / 2000)

    exper1['ClientY'] = exper1['ClientY'] * (2160 / 1200)
    exper2['ClientY'] = exper2['ClientY'] * (2160 / 1200)
    exper3['ClientY'] = exper3['ClientY'] * (2160 / 1200)
    df['ClientY'] = df['ClientY'] * (2160 / 1200)

    df['Pressure'] = df['Pressure'] * 8192

    #Global Features Sitting
    exper1_t = max(exper1['timestamp']) - min(exper1['timestamp'])
    exper2_t = max(exper2['timestamp']) - min(exper2['timestamp'])
    exper3_t = max(exper3['timestamp']) - min(exper3['timestamp'])
    timeSpent = exper1_t + exper2_t + exper3_t

    df['TiltX'] = df['TiltX'] + 90
    df['TiltY'] = df['TiltY'] + 90

    def find_peaks(series):
        valleys = []
        for i in range(1, len(series) - 1): 
            if series.iloc[i] < series.iloc[i - 1] and series.iloc[i] < series.iloc[i + 1]:
                valleys.append(i)
        return valleys

    def find_valleys(series):
        valleys = []
        for i in range(1, len(series) - 1): 
            if series.iloc[i] < series.iloc[i - 1] and series.iloc[i] < series.iloc[i + 1]:
                valleys.append(i)
        return valleys


    w1 = (max(exper1['ClientX']) - min(exper1['ClientX']))
    w2 = (max(exper2['ClientX']) - min(exper2['ClientX']))
    w3 = (max(exper3['ClientX']) - min(exper3['ClientX']))

    Width = sum([w1, w2, w3]) /3

    # print('Width:', Width)

    h1 = (max(exper1['ClientY']) - min(exper1['ClientY']))
    h2 = (max(exper2['ClientY']) - min(exper2['ClientY']))
    h3 = (max(exper3['ClientY']) - min(exper3['ClientY']))

    Height = sum([h1, h2, h3])/3

    # print('Height:', Height)

    output.at[0, 'Width']= Width
    output.at[0, 'Height']= Height

    euclidean_distances = []

    for exper in [exper1, exper2, exper3]:
        for i in range(1, len(exper)):
            x = exper['ClientX'][i] - exper['ClientX'][i-1]
            y = exper['ClientY'][i] - exper['ClientY'][i-1]

            sqrt = math.sqrt((x**2) + (y**2))
            euclidean_distances.append(sqrt)

    Length = sum(euclidean_distances)

    # print("Length:", Length)

    output.at[0, 'Length']= Length


    def calculate_velocities(exper):
        euclidean_distances = []
        velocities = []

        for i in range(1, len(exper)):
            x = exper['ClientX'][i] - exper['ClientX'][i-1]
            y = exper['ClientY'][i] - exper['ClientY'][i-1]

            displacement = math.sqrt((x**2) + (y**2))
            euclidean_distances.append(displacement)

            delta_time = exper['timestamp'][i] - exper['timestamp'][i-1]

            if delta_time > 0:
                Velocity = displacement / delta_time
                velocities.append(Velocity)
            else:
                velocities.append(0)

        return velocities

    velocities_exper1 = pd.Series(calculate_velocities(exper1))
    velocities_exper2 = pd.Series(calculate_velocities(exper2))
    velocities_exper3 = pd.Series(calculate_velocities(exper3))
    velocities = pd.concat([velocities_exper1, velocities_exper2, velocities_exper3])
    Velocity = velocities.mean()

    P_max_V = max(velocities)
    P_min_V = min(velocities)

    # print('Velocity:', Velocity)
    # print("P_max_V:", P_max_V)
    # print("P_min_V:", P_min_V)

    output.at[0, 'Velocity']= Velocity

    output.at[0, 'P_max_V']= P_max_V
    output.at[0, 'P_min_V']= P_min_V

    def calculate_accelerations(exper):
        accelerations = []
        previous_Velocity = 0

        for i in range(1, len(exper)):
            x = exper['ClientX'][i] - exper['ClientX'][i-1]
            y = exper['ClientY'][i] - exper['ClientY'][i-1]
            displacement = math.sqrt((x**2) + (y**2))

            delta_time = exper['timestamp'][i] - exper['timestamp'][i-1]

            if delta_time > 0:
                Velocity = displacement / delta_time
                delta_Velocity = Velocity - previous_Velocity
                acceleration = abs(delta_Velocity) / delta_time
                accelerations.append(acceleration)

                previous_Velocity = Velocity
            else:
                accelerations.append(0)

        return accelerations

    accelerations_exper1 = pd.Series(calculate_accelerations(exper1))
    accelerations_exper2 = pd.Series(calculate_accelerations(exper2))
    accelerations_exper3 = pd.Series(calculate_accelerations(exper3))
    accelerations = pd.concat([accelerations_exper1, accelerations_exper2, accelerations_exper3])
    P_max_A= max(accelerations)
    P_min_A = min(accelerations)


    # print("P_max_A:", P_max_A)
    # print("P_min_A:", P_min_A)

    output.at[0, 'P_max_A']= P_max_A
    output.at[0, 'P_min_A']= P_min_A


    GA_mean_H = df['TiltX'].mean()
    GA_mean_V = df['TiltY'].mean()

    # print("Mean grip angle for horizontal:", GA_mean_H)
    # print("Mean grip angle for vertical:", GA_mean_V)

    output.at[0, 'GA_mean_H']= GA_mean_H
    output.at[0, 'GA_mean_V']= GA_mean_V

    #Feature 11
    GA_SD_H = df['TiltX'].std()
    # print("GA_SD_H:", GA_SD_H)

    # Feature 12
    GA_SD_V = df['TiltY'].std()
    # print("GA_SD_V:", GA_SD_V)

    output.at[0, 'GA_SD_H']= GA_SD_H
    output.at[0, 'GA_SD_V']= GA_SD_V

    #Feature 13
    PressureMean = df['Pressure'].mean()
    # print("Mean of Pressure:", PressureMean)

    #Feature 14
    PressureSD = stat.stdev(df['Pressure'])
    # print("SD of Pressure:", PressureSD)

    output.at[0, 'PressureMean']= PressureMean
    output.at[0, 'PressureSD']= PressureSD

    pressure_data = [float(p) for p in df['Pressure']]

    pressure_changes = [pressure_data[i + 1] - pressure_data[i] for i in range(len(pressure_data) - 1)]
    positive_changes = [change for change in pressure_changes if change > 0]
    negative_changes = [abs(change) for change in pressure_changes if change < 0]

    # Feature 15
    PCAvgPos = stat.mean(positive_changes)

    # Feature 16
    PCSDPos = stat.stdev(positive_changes)

    # Feature 17
    PCMax = max(positive_changes)

    # print("PCAvgPos:",PCAvgPos )
    # print("PCSDPos:",PCSDPos )
    # print("PCMax:", PCMax)

    # Feature 18
    PCAvgNeg = stat.mean(negative_changes)

    # Feature 19
    PCSDNeg = stat.stdev(negative_changes)

    # Feature 20
    PCMin = max(negative_changes)

    # print("PCAvgNeg:",PCAvgNeg )
    # print("PCSDNeg:",PCSDNeg )
    # print("PCMin:",PCMin )

    output.at[0, 'PCAvgPos']= PCAvgPos
    output.at[0, 'PCSDPos']= PCSDPos
    output.at[0, 'PCMax']= PCMax

    output.at[0, 'PCAvgNeg']= PCAvgNeg
    output.at[0, 'PCSDNeg']= PCSDNeg
    output.at[0, 'PCMin']= PCMin

    """# **Feature 21 & 23 ✅**"""

    errors = []
    def calculate_angle(x1, y1, x2, y2, x3, y3):
        # Calculate the angle given three points using trigonometry
        vector1 = np.array([x1 - x2, y1 - y2])
        vector2 = np.array([x3 - x2, y3 - y2])

        dot_product = np.dot(vector1, vector2)
        magnitude_product = np.linalg.norm(vector1) * np.linalg.norm(vector2)

        if magnitude_product == 0:
            return 0

        cosine_angle = dot_product / magnitude_product
        angle_rad = np.arccos(np.clip(cosine_angle, -1.0, 1.0))
        angle_deg = np.degrees(angle_rad)


        return angle_deg

    def compute_error_feature(row1, row2, row3):
        x1, y1 = row1['TiltX'], row1['TiltY']
        x2, y2 = row2['TiltX'], row2['TiltY']
        x3, y3 = row3['TiltX'], row3['TiltY']

        triangle_angle = calculate_angle(x1, y1, x2, y2, x3, y3)
        square_angle = 90

        error = square_angle - triangle_angle

        if error < 0: errors.append(error)

        return error < 0, row2['timestamp']


    error_features = []
    errors = []

    # Iterate through rows to compute the error feature for each pair of points
    for i in range(0, len(df) - 2, 3):
        row1 = df.iloc[i]
        row2 = df.iloc[i + 1]
        row3 = df.iloc[i + 2]
        error_feature, timestamp = compute_error_feature(row1, row2, row3)
        error_features.append(int(error_feature))

    Error = sum(error_features)

    # Print the results
    # print("Error Feature: ", Error)

    output.at[0, 'Error']= Error
    

    press = df['Pressure']
    press.at[len(press)] = 0

    valleys = find_valleys(press)
    Pressure_valleys = df['Pressure'].iloc[valleys]

    PeakpresMean = Pressure_valleys.mean()
    output.at[0, 'PeakpresMean']= PeakpresMean

    error_timestamps = []
    minima_timestamps = []
    count = 0
    errors = []

    for i in range(1, len(df) - 2, 3):
        error, timestamp = compute_error_feature(df.iloc[i-1], df.iloc[i], df.iloc[i+1])
        if error:
            count += 1
            error_timestamps.append(timestamp)

        if (df.iloc[i-1]['TiltX'] > df.iloc[i]['TiltX'] < df.iloc[i+1]['TiltX']) or (df.iloc[i-1]['TiltY'] > df.iloc[i]['TiltY'] < df.iloc[i+1]['TiltY']):
            minima_timestamps.append(timestamp)  # Use the converted timestamp here

    filtered_minima_timestamps = [t for t in minima_timestamps if any(t < error_time for error_time in error_timestamps)]

    numeric_minima_timestamps = [t.timestamp() for t in pd.to_datetime(filtered_minima_timestamps)]

    # Calculate mean starting time
    ErrorStopTime = np.mean(numeric_minima_timestamps) if numeric_minima_timestamps else None

    # print("ErrorStopTime:", ErrorStopTime)

    output.at[0, 'ErrorStopTime']= ErrorStopTime

    df['TiltAngle'] = np.degrees(np.arctan2(df['TiltY'], df['TiltX']))

    anglepeaks = find_peaks(df['TiltAngle'])
    anglevalleys = find_valleys(df['TiltAngle'])

    mean_angle_at_peaks = df['TiltAngle'].iloc[anglepeaks].mean()
    mean_angle_at_valleys = df['TiltAngle'].iloc[anglevalleys].mean()

    AngleMean = np.mean([mean_angle_at_peaks, mean_angle_at_valleys])

    print("Mean Angle:", AngleMean)
    output.at[0, 'AngleMean']= AngleMean


    variance_angle_at_peaks = df['TiltAngle'].iloc[anglepeaks].var()
    variance_angle_at_valleys = df['TiltAngle'].iloc[anglevalleys].var()

    AngleVar = np.mean([variance_angle_at_peaks, variance_angle_at_valleys])

    # print("Variance of Angle:", AngleVar)

    output.at[0, 'AngleVar']= AngleVar


    raw_data = df.filter(['ClientX', 'ClientY', 'TiltX', 'TiltY', 'Pressure', 'timestamp'])


    correlation_matrix = raw_data.corr()

    sorted_correlations = correlation_matrix.abs().unstack().sort_values(ascending=False)

    # Select the top N pairs (adjust N based on your preferences)
    top_pairs = sorted_correlations[sorted_correlations < 1].head(1).index

    col1, col2 = top_pairs[0]

    x = np.array(df[col1])
    y = np.array(df[col2])

    # Using polyfit for a linear model (degree 1 polynomial)
    ReglineSlope, ReglineIntercept = np.polyfit(x, y, 1)

    # print(f"Regression Slope for {col1} vs {col2}: {ReglineSlope}")
    # print(f"Regression Intercept for {col1} vs {col2}: {ReglineIntercept}")
    output.at[0, 'ReglineSlope']= ReglineSlope
    output.at[0, 'ReglineIntercept']= ReglineIntercept


    # Error Peaks
    LoopCount = timeSpent / Error

    # print('LoopCount:',LoopCount)

    output.at[0, 'LoopCount']= LoopCount


    # Combine velocities into a single pandas Series
    combined_velocities = pd.concat([velocities_exper1, velocities_exper2, velocities_exper3], ignore_index=True)

    # Find peaks and valleys in the combined velocities
    Vpeaks = find_peaks(combined_velocities)
    Vvalleys = find_valleys(combined_velocities)

    # Extract velocities at peaks and valleys
    velocities_at_peaks = combined_velocities.iloc[Vpeaks]
    velocities_at_valleys = combined_velocities.iloc[Vvalleys]

    # Calculate mean velocities at peaks and valleys
    mean_Velocity_at_peaks = velocities_at_peaks.mean()
    mean_Velocity_at_valleys = velocities_at_valleys.mean()

    # Combine the mean velocities to get a single value
    AngleSpeed = np.mean([mean_Velocity_at_peaks, mean_Velocity_at_valleys])

    print("Mean of velocities at the edge of peaks and valleys:", AngleSpeed)
    # Mean of velocities at the edge of peaks and valleys: 0.5077363572208352

    output.at[0, 'AngleSpeed']= AngleSpeed


    ErrorRate = abs(Error/sum(errors))

    # print(ErrorRate)

    output.at[0, 'ErrorRate']= ErrorRate

    # StrokeDurationArray = df[df['StrokeDuration'] != 0]
    # Stroke_Duration_mean = stat.mean(StrokeDurationArray['StrokeDuration'])
    # #print(Stroke_Duration_mean)

    # output.at[0, 'Stroke_Duration_mean']= Stroke_Duration_mean

    # Stroke_Durations = sum(StrokeDurationArray['StrokeDuration'])

    # On_Paper_Time = Stroke_Durations
    # #print('On_Paper_Time:',On_Paper_Time)

    # output.at[0, 'On_Paper_Time']= On_Paper_Time


    # In_Air_Time = (timeSpent - On_Paper_Time)
    # #print('In_Air_Time:',In_Air_Time)

    # output.at[0, 'In_Air_Time']= In_Air_Time

    # output.to_csv('output.csv')
    return output


# ZL_trace = FeatureEng(ZL_trace_raw, ZL_trace_exper1, ZL_trace_exper2, ZL_trace_exper3)
# ZL_predict = FeatureEng(ZL_predict_raw, ZL_predict_exper1, ZL_predict_exper2, ZL_predict_exper3)
# PL_trace = FeatureEng(PL_trace_raw, PL_trace_exper1, PL_trace_exper2, PL_trace_exper3)
PL_predict = FeatureEng(PL_predict_raw, PL_predict_exper1, PL_predict_exper2, PL_predict_exper3)
# print(PL_predict)

# try:  
#     predictions = trained_model.predict(PL_predict)

#     if predictions[0] == 0:
#         result = {'message': 'File processed successfully', 'data': 'No ADHD'}
#     elif predictions[0] == 1:
#         result = {'message': 'File processed successfully', 'data': 'ADHD'}

#     # Serialize `result` to a JSON formatted string and print
#     print(json.dumps(result))

# except Exception as e:
#     error_result = {'error': str(e)}
#     # Serialize `error_result` to a JSON formatted string and print
#     print(json.dumps(error_result))
