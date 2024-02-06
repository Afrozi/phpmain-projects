import mysql.connector
conn = mysql.connector.connect(host="localhost", user="afroz", passwd="7827110882", database="pythondb")
mycursor = conn.cursor()
mycursor.execute("SELECT * FROM `empolyeeinfo`")
showresult = mycursor.fetchall()
for row in showresult:
    print(row)