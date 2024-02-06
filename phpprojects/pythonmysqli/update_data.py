import mysql.connector
conn = mysql.connector.connect(host="localhost", user="afroz", passwd="7827110882", database="pythondb")
mycursor = conn.cursor()
mycursor.execute("update empolyeeInfo set salary=70000 where Emp_ID = 102")
conn.commit()