#!C:/Python36/python.exe
print("Content-Type: text/html\n\n")
#print("Refresh: 0; url=%s"%"a.html")
print()

import cgi
import pymysql
form=cgi.FieldStorage()
bid=form.getvalue("bid")
'''title=form.getvalue("btitle")
author=form.getvalue("bauthor")
pub=form.getvalue("bpub")'''
print("<html>")
print("<body>")
print("<form action='http://localhost/PythonProject/update2.py'>")
print("<table border='1' align='center'><tr>")
print("<th align='left'>Book id:</th><td><input type='text' value=")
print(bid)
print("name='bid'></td></tr><br>")
print("<th align='left'>Book Title:</th><td><input type='text' name='btitle'></td></tr><br>")
print("<th align='left'>Book Author:</th><td><input type='text' name='bauthor'></td></tr><br>")
print("<th align='left'>Book Publisher:</th><td><input type='text' name='bpub'></td></tr><br>")

print("<tr><td align='center' colspan=2><input type='submit' value='Update'></td></tr>")
print("</table></form></body></html>")
print("<a href='http://localhost/PythonProject/a.html'> Back</a>")
"""con=pymysql.connect('localhost','root','','test')
cur=con.cursor()
#sql="INSERT INTO BOOKS VALUES(%s,%s,%s,%s)",(bid,title,author,pub)
cur.execute("SELECT * FROM BOOKS WHERE Bokid=bid)
result=cur.fetchall()
for row in result:
	bookid=row[0]
	title=row[1]
	author=row[2]
	publisher=row[3]
	
print("Data inserted Successfully")
con.commit()
cur.close()"""