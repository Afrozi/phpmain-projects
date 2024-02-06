import mysql.connector
conn = mysql.connector.connect(host="localhost", user="afroz", passwd="7827110882",)
print(conn)
if(conn):
    print("successfully")
else:
    print("not successfully")