#!C:/Python36/python.exe
print("Content-Type: text/html\n\n")
#print("Refresh: 0; url=%s"%"a.html")
print()
"""import cgi
import pymysql
con=pymysql.connect('localhost','root','','test')
cur=con.cursor()
cur.execute("SELECT * FROM login WHERE name='name'")
results = cursor.fetchall()
i=0"""

"""print('<html>')
print('  <head>')
#print('    <meta http-equiv="refresh" content="0;url='+str(redirectURL)+'" />') 
print('  </head>')
print('<body>')
print('<a href="c.py">Add new Book</a>')
print('<a href="d.py">View Books</a>')
print('</body>')
print('</html>')
con.commit()
cur.close()"""
print('<h1>welcome</h1>')
print('<a href="c.py">Add new Book</a><br>')
print('<a href="d.py">View Books</a>')