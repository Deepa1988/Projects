#!C:/Python36/python.exe
print("Content-Type: text/html\n\n")
#print("Refresh: 0; url=%s"%"a.html")
 #print()
import cgi
import pymysql
import urllib.request


#print("<h1>wel</h1>")
form=cgi.FieldStorage()
name=form.getvalue("name")
passw=form.getvalue("pass")

con=pymysql.connect('localhost','root','','test')
cur=con.cursor()
cur.execute("SELECT * FROM login WHERE name='name'")
results = cur.fetchall()
i=0
if name=='admin':
	#response = urllib.request.urlopen('http://localhost/PythonProject/a.py')
	#html = response.read()
	redirectURL = "http://localhost/PythonProject/a.html"
	print('<html>')
	print('  <head>')
	print('    <meta http-equiv="refresh" content="0;url='+str(redirectURL)+'" />') 
	print('  </head>')
	print('</html>')
else:
	#response = urllib.request.urlopen('http://localhost/PythonProject/a.py')
	#html = response.read()
	redirectURL = "http://localhost/PythonProject/b.html"
	print('<html>')
	print('  <head>')
	print('    <meta http-equiv="refresh" content="0;url='+str(redirectURL)+'" />') 
	print('  </head>')
	print('</html>')	

"""for row in results:
	n = row[i]
	p = row[i+1]
	if name=='admin':
		redirectURL = "http://localhost/PythonProject/a.html"
		print('<html>')
		print('  <head>')
		print('    <meta http-equiv="refresh" content="0;url='+str(redirectURL)+'" />') 
		print('  </head>')
		print('</html>')
		found=True
		break
	elif n==name:
		redirectURL = "http://localhost/PythonProject/b.html"
		found=True
		break
		
if(found==True):
	print('<html>')
	print('  <head>')
	print('    <meta http-equiv="refresh" content="0;url='+str(redirectURL)+'" />') 
	print('  </head>')
	print('</html>')
else:
   print("login error")"""

con.commit()
cur.close()
#header("Location:/PythonProject/a.html")
#print("Logged in Successfuly")