#!C:/Python36/python.exe
print("Content-Type: text/html\n\n")
print()

import cgi
import pymysql
form=cgi.FieldStorage()
bid=form.getvalue("bid")
title=form.getvalue("btitle")
author=form.getvalue("bauthor")
pub=form.getvalue("bpub")

con=pymysql.connect('localhost','root','','test')
cur=con.cursor()
#sql="INSERT INTO BOOKS VALUES(%s,%s,%s,%s)",(bid,title,author,pub)
#cur.execute("INSERT INTO BOOKS VALUES(%s,%s,%s,%s)",(bid,title,author,pub))
#sql="UPDATE BOOKS VALUES SET title=?,author=?,publisher=? WHERE Bokid=?"
#cur.execute(sql,(title,author,pub,bid))
#cur.execute("UPDATE BOOKS SET title=%s,author=%s,publisher=%s WHERE Bokid=%s",(title,author,pub,bid))
cur.execute("UPDATE `books` SET `title`=%s,`author`=%s,`publisher`=%s WHERE `Bokid`=%s",(title,author,pub,bid))
print("Data updated Successfully")
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