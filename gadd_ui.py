import requests
from flask import Flask, render_template, request
import os

__author__ = 'cpuskarz'

app = Flask(__name__)

@app.route('/')
def gadd_start():
    return render_template('home.html')

@app.route('/h100')
def gadd_h100():
    return render_template('gadd-h100.html')



if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')

