import mysql.connector
conn = mysql.connector.connect(host="localhost", user="afroz", passwd="7827110882")
mycursor = conn.cursor()
mycursor.execute("create database pythondb")