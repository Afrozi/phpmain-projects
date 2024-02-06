import mysql.connector
conn = mysql.connector.connect(host="localhost", user="afroz", passwd="7827110882", database="pythondb")
mycursor = conn.cursor()
mycursor.execute("SELECT * FROM `empolyeeinfo` where Designation = 'manager'")
showresult = mycursor.fetchone()
for row in showresult:
    print(row)