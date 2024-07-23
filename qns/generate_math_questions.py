import openpyxl
from openpyxl.styles import Alignment
import random

# Function to generate math questions
def generate_questions(num_questions):
    questions = []
    while len(questions) < num_questions:
        num1 = random.randint(1, 50)
        num2 = random.randint(1, 50)
        operator = random.choice(['+', '-', '*', '/'])
        
        if operator == '+':
            answer = num1 + num2
        elif operator == '-':
            answer = num1 - num2
        elif operator == '*':
            answer = num1 * num2
        elif operator == '/':
            # Ensure division is valid and results in an integer
            if num2 != 0 and num1 % num2 == 0:
                answer = num1 // num2
            else:
                continue  # Skip this iteration if division condition not met
        else:
            continue  # Skip unknown operators
        
        question = f"{num1} {operator} {num2} = ?"
        questions.append((question, answer))
    
    return questions[:num_questions]  # Ensure exactly num_questions are returned

# Generate 100 questions
questions = generate_questions(100)

# Create a new Excel workbook for questions
workbook_questions = openpyxl.Workbook()
sheet_questions = workbook_questions.active
sheet_questions.title = "Math Questions"

# Create a new Excel workbook for answers
workbook_answers = openpyxl.Workbook()
sheet_answers = workbook_answers.active
sheet_answers.title = "Math Answers"

# Write questions to questions workbook
for index, (question, _) in enumerate(questions, start=1):
    sheet_questions[f'A{index}'] = f"Question {index}: {question}"
    sheet_questions[f'B{index}'] = "Marks: 5"

# Write answers to answers workbook
for index, (_, answer) in enumerate(questions, start=1):
    sheet_answers[f'A{index}'] = f"Answer {index}:"
    sheet_answers[f'B{index}'] = answer

# Save both workbooks
workbook_questions.save("Middle_School_Math_Questions.xlsx")
workbook_answers.save("Middle_School_Math_Answers.xlsx")

print("Excel files generated successfully.")
