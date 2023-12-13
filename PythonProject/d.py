#!C:/Python36/python.exe
print("Content-Type: text/html\n\n")
#print("Refresh: 0; url=%s"%"a.html")
print()
print('<h1>welcome</h1>')
import cgi
import pymysql
form=cgi.FieldStorage()
bid=form.getvalue("bid")
title=form.getvalue("btitle")
author=form.getvalue("bauthor")
edition=form.getvalue("bedition")
pub=form.getvalue("bpub")

con=pymysql.connect('localhost','root','','test')
cur=con.cursor()
cur.execute("INSERT INTO BOOKS VALUES('bid','title','author',edition,'pub'")
print("<h3>Data inserted successfully</h3>")
con.commit()
cur.close()