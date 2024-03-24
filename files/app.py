import pandas as pd
from joblib import load
import sys
import json  # Import JSON module

model_filename = sys.argv[2]
trained_model = load(model_filename)

file_path = sys.argv[1]  # Get file path from command line argument

try:
    data = pd.read_csv(file_path)  
    predictions = trained_model.predict(data)

    if predictions[0] == 0:
        result = {'message': 'File processed successfully', 'data': 'NO ADHD'}
    elif predictions[0] == 1:
        result = {'message': 'File processed successfully', 'data': 'ADHD'}

    print(json.dumps(result))  # This will be captured by the Laravel application
except Exception as e:
    error_result = {'error': str(e)}
    print(json.dumps(error_result))