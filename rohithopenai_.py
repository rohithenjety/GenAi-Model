import gradio
import time
import json
import openai
import smtplib
from email.mime.text import MIMEText
from nltk.tokenize import word_tokenize

openai.api_key = "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"

rate_limit = 1
last_request_time = 0
messages = [{"role": "system", "content": "You are a company openai, you should be restricted to abide by the guidelines"}]

# Load guidelines from instructions.json file
with open("instructions.json", "r") as file:
    data = json.load(file)
    guidelines = data["guidelines"]

# Initialize word count dictionary for tracking word occurrences and misuse attempts
word_counts = {word: 0 for word in guidelines}
misuse_attempts = 0  # Counter for misuse attempts
max_occurrences = 2  # Maximum occurrences before sending email
admin_email = "test114@gmail.com"  # Admin's email address

def send_email(subject, message):
    # Email sending functionality using SMTP
    smtp_server = "your_smtp_server"
    smtp_port = 587  # Example port, adjust as needed
    sender_email = "rohithtest@gmail.com"
    
    msg = MIMEText(message)
    msg['Subject'] = subject
    msg['From'] = sender_email
    msg['To'] = admin_email

    try:
        with smtplib.SMTP(smtp_server, smtp_port) as server:
            server.starttls()
            server.login(sender_email, "Rohith@114$123")
            server.sendmail(sender_email, admin_email, msg.as_string())
        print("Email sent successfully to admin.")
    except Exception as e:
        print(f"Error sending email: {e}")

def check_guidelines(user_input):
    global misuse_attempts
    # Check if the user input matches any of the guidelines and update word counts
    tokens = word_tokenize(user_input.lower())
    for token in tokens:
        if token in guidelines:
            word_counts[token] += 1
            if word_counts[token] >= max_occurrences:
                send_email("Word Occurrence Alert", f"The word '{token}' occurred {max_occurrences} times in user input.")
            misuse_attempts += 1  # Increment misuse attempt count
            return True
    return False

def CustomChatGPT(user_input):
    global last_request_time

    current_time = time.time()
    delay = max(0, rate_limit - (current_time - last_request_time))
    time.sleep(delay)

    last_request_time = current_time
    messages.append({"role": "user", "content": user_input})

    if check_guidelines(user_input):
        # If the user input matches any guideline, print a given statement
        ChatGPT_reply = "You are not supposed to ask this type of questions to me, please ask me any other question, I am here to help you!"
    else:
        response = openai.ChatCompletion.create(
            model="gpt-3.5-turbo",
            messages=messages
        )
        ChatGPT_reply = response["choices"][0]["message"]["content"]

    messages.append({"role": "assistant", "content": ChatGPT_reply})
    return ChatGPT_reply, f"Misuse Attempts: {misuse_attempts}"

demo = gradio.Interface(fn=CustomChatGPT, inputs="text", outputs=["text", "text"], title="Trio_aces",
                        description="Enter your message and see AI response along with misuse attempts.")
demo.launch(share=True)
