import mysql.connector
conn = mysql.connector.connect(host="localhost", user="afroz", passwd="7827110882", database="pythondb")
mycursor = conn.cursor()
# mycursor.execute("INSERT INTO `empolyeeinfo` (`Emp_ID`, `Emp_Name`, `Designation`, `salary`) VALUES ('106', 'sumon', 'empolyes', '440000')")
insertdata = "INSERT INTO `empolyeeinfo` (`Emp_ID`, `Emp_Name`, `Designation`, `salary`) VALUES (%s, %s, %s, %s)"

records = [
    (102, "sultan", "manager", 560000),
    (103, "mohit", "owner", 860000),
    (104, "shiva", "empolye", 760000),
]
mycursor.executemany(insertdata, records)
conn.commit()
