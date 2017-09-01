from flask import Flask, jsonify
import random

app = Flask(__name__)

@app.route('/api/test')
def test(methods=['GET']):
    data = [1, 2, 3, 4, 5, 6, 7]
    return jsonify(data)

if __name__ == "__main__":
    app.run(debug=True)