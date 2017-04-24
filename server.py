
from flask import Flask,render_template
app = Flask(__name__, static_folder='static', static_url_path='/static')

@app.route('/')
def display():
	movies=["Begum jaan","Naam Shabana","Baahubali 2","Fast & Furious 8","Ghost in the Shell","The Boss Baby"]
	return render_template("moviereview.php",movies=movies)
	#return "hrllo"

@app.route('/<x>/')
def d(x):
	x=x.replace(" ","_")
	return render_template("%s.html"%x)
	

if __name__=='__main__':
    app.run()