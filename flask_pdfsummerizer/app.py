from flask import Flask, request, render_template, redirect, url_for
from werkzeug.utils import secure_filename
from PyPDF2 import PdfReader
from transformers import pipeline
import os

app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = 'uploads'

summarizer = pipeline("summarization")

def extract_text_from_pdf(pdf_path):
    reader = PdfReader(pdf_path)
    text = ''
    for page in reader.pages:
        text += page.extract_text()
    return text

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        if 'file' not in request.files:
            return redirect(request.url)
        file = request.files['file']
        if file.filename == '':
            return redirect(request.url)
        if file:
            filename = secure_filename(file.filename)
            file_path = os.path.join(app.config['UPLOAD_FOLDER'], filename)
            file.save(file_path)
            text = extract_text_from_pdf(file_path)
            summary = summarizer(text, max_length=150, min_length=30, do_sample=False)[0]['summary_text']
            return render_template('index.html', summary=summary)
    return render_template('index.html', summary='')

if __name__ == '__main__':
    if not os.path.exists('uploads'):
        os.makedirs('uploads')
    app.run(debug=True)
