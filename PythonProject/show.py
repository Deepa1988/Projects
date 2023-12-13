#!C:/Python36/python.exe
print("Content-Type: text/html\n\n")
print()

import cgi
import pymysql
con=pymysql.connect('localhost','root','','test')
cur=con.cursor()
cur.execute("SELECT * FROM BOOKS")
print("<h3>Book Details</h3>")
print("<table border='1'><tr><th>BookID</th><th>Title</th><th>Author</th><th>Publisher</th></tr>")
result=cur.fetchall()
for row in result:
	bookid=row[0]
	title=row[1]
	author=row[2]
	publisher=row[3]
	print("<tr><td>")
	print(bookid)
	print("</td>")
	print("<td>")
	print(title)
	print("</td>")
	print("<td>")
	print(author)
	print("</td>")
	print("<td>")
	print(publisher)
	print("</td></tr>")
print("</table>")
print("<a href='http://localhost/PythonProject/a.html'> Back</a>")
con.commit()
cur.close()