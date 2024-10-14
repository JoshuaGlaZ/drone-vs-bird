# Drone vs Bird Classification Project

This project aims to classify images of drones and birds using various image processing techniques and machine learning models. The classification process includes data augmentation, preprocessing using Histogram of Oriented Gradients (HOG), and evaluating multiple classifiers.

## Notebook Analysis
The notebook performs an analysis of the classification model's performance. Key metrics and findings include:
- Model Accuracy: The best-performing model achieved an accuracy of X% on the test dataset. (Replace X% with actua- accuracy)
- Evaluation Metrics:
    - Precision: The model achieved a precision of Y% for drone classification and Z% for bird classification. (Replac- Y% and Z% with actual precision values)
    - Recall: The recall for drones was A% and for birds was B%. (Replace A% and B% with actual recall values)
    - F1 Score: The F1 score for the models was C% for drones and D% for birds. (Replace C% and D% with actual F1 scores)
- Hyperparameter Tuning: The model utilized GridSearchCV for hyperparameter tuning to optimize model performance- exploring various configurations to find the best parameters.

## Project Structure

```bash
drone-vs-bird/
│
├── drone_bird/
│   └── drone_or_bird/
│       ├── birds/
│       │   ├── 0a5b4074-52c7-42d5-8b5e-54b4f93fc129.jpg
│       │   └── ...
│       └── drones/
│           ├── 0ce60dde-ed13-4fd3-85b9-0a824e51676c.jpg
│           └── ...
│
├── model/
│   ├── drone_bird_modelv2.sav
│   └── drone_bird_modelv1.sav
│
├── .gitignore
├── app.py
├── DIP_Program_Drone_Bird_Classification_HOG_v2_.ipynb
├── docker-compose.yml
├── Dockerfile.flask
├── Dockerfile.php
├── drone_bird.zip
├── index.php
├── process.py
├── README.md
├── requirements.txt
├── script.js
└── style.css
```

## Setup and Run Instructions

### Prerequisites

Ensure you have Docker and Docker Compose installed on your machine.

### Build and Run the Containers
```bash
docker-compose up --build
```

### Access the Application

Flask Backend: http://localhost:5000

PHP Frontend: http://localhost:8085
