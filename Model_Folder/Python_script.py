import pandas as pd
from joblib import load

# Load the saved model Model_Folder\svm_model.joblib
model_filename = 'Model_Folder/svm_model.joblib'
trained_model = load(model_filename)

# Paths to the datasets 
data1_path = 'storage/app/Pl_ADHD.csv'

# Load the datasets
data1 = pd.read_csv(data1_path)

# Predict with the trained model
new_predictions = trained_model.predict(data1)
print(new_predictions)
