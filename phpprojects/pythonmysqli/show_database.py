import mysql.connector
conn = mysql.connector.connect(host="localhost", user="afroz", passwd="7827110882")
mycursor = conn.cursor()
mycursor.execute("show databases")
for db in mycursor:
    print(db)