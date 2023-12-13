#!C:/Python36/python.exe
print("Content-Type: text/html\n\n")
#print("Refresh: 0; url=%s"%"a.html")
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
cur.execute("INSERT INTO BOOKS VALUES(%s,%s,%s,%s)",(bid,title,author,pub))
print("Data inserted Successfully")
print("<a href='http://localhost/PythonProject/a.html'> Back</a>")
con.commit()
cur.close()
