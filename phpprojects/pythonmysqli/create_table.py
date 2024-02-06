import mysql.connector
conn = mysql.connector.connect(host="localhost", user="afroz", passwd="7827110882", database="pythondb")
mycursor = conn.cursor()
mycursor.execute("create table empolyeeInfo(Emp_ID int, Emp_Name varchar(100), Designation varchar(100), salary decimal(15,2))")

