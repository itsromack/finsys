#!/usr/bin/python

from flask import *

# from erc import *

app = Flask(__name__)
db = DB(
    host="localhost",
    db="finsys",
    user="root",
    passwd="secret123",
    autocommit=True
)

@app.route('/', methods=['GET'])
def homepage():
    pass

if __name__ == '__main__':
    app.run(debug=True)
