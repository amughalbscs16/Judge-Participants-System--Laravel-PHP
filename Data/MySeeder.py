import bcrypt
import mysql.connector
import time
#id	project_name created_at	updated_at
def addTeamRecord(team):
	mydb = mysql.connector.connect(
	  host="localhost",
	  user="root",
	  passwd="alihassaan",
	  database="judgefics2020"
	)
	table_name = 'teams'
	mycursor = mydb.cursor()
	timestamp = time.strftime('%Y-%m-%d %H:%M:%S')
	data = ( int(team[1].replace(')','')) , team[0], timestamp, timestamp)
	query = "Insert into "+table_name+"(id, project_name, created_at, updated_at) values (%s, %s, %s, %s)"
	mycursor.execute(query, data)
	mydb.commit()
	mycursor.close()
	mydb.close()


def getPassword(password):
	passwd = bytes(password, 'utf-8')
	salt = bcrypt.gensalt(rounds=10)
	hashed = bcrypt.hashpw(passwd, salt)
	if bcrypt.checkpw(passwd, hashed):
	    print("match")
	else:
	    print("does not match")

import csv
with open('judgesxteams.csv', 'r') as file:
    reader = csv.reader(file)
    for row in reader:
        print(row)
#getPassword("Muhammad")
with open('teams_list_original.txt', 'r') as file:
    readerteams = csv.reader(file, delimiter = '(')
    for row in readerteams:
        print(row)
       	addTeamRecord(row)
#read .csv file 
#read .txt file (split on "(")

