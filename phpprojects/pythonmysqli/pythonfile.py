
name=form.getvalue("name")
email=form.getvalue("email")
password=form.getvalue("password")

import mysql.connector
conn = mysql.connector.connect(host="localhost", user="afroz", passwd="7827110882", database="pythondata")
mycursor = conn.cursor()
mycursor.execute("INSERT INTO `pythontables` (`%s`, `%s`, `%s`, `%s`) VALUES ('name', 'email', 'pasword', 'id')")
conn.commit()
print("insert data successful")