import bcrypt
import mysql.connector
import time
import random
import string

#id	project_name created_at	updated_at
judges = {}

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
#generate a list of unique judges and add it into the users table.
def addJudgeTeamRecord(jteam):
	mydb = mysql.connector.connect(
	  host="localhost",
	  user="root",
	  passwd="alihassaan",
	  database="judgefics2020"
	)
	#Judges same email but multiple Email Ids
	if jteam[2] in judges:
		jteam[0] = judges[jteam[2]]
	table_name = 'judge_teams'
	mycursor = mydb.cursor()
	timestamp = time.strftime('%Y-%m-%d %H:%M:%S')
	print(jteam[0].replace("ï»¿", ''), jteam[3], timestamp, timestamp)
	data = ( jteam[0].replace("ï»¿", ''), jteam[3], timestamp, timestamp)
	query = "Insert into "+table_name+"(judge_id, team_id, created_at, updated_at) values (%s, %s, %s, %s)"
	mycursor.execute(query, data)
	mydb.commit()
	mycursor.close()
	mydb.close()

def addJudgeRecord(jteam):
	if not jteam[2] in judges:
		mydb = mysql.connector.connect(
		  host="localhost",
		  user="root",
		  passwd="alihassaan",
		  database="judgefics2020"
		)
		table_name = 'users'
		mycursor = mydb.cursor()
		timestamp = time.strftime('%Y-%m-%d %H:%M:%S')
		rawpassword = getRawPassword()
		print(rawpassword)
		data = ( jteam[0], jteam[1], jteam[2].replace(u'\xa0',u''), getHashedPassword(rawpassword) , 'judge', timestamp, timestamp)
		finalFile = open("FinalOutputFile.txt", "a+")
		finalFile.write(jteam[0]+','+jteam[1]+','+jteam[2].replace(u'\xa0',u'')+','+rawpassword+"\n")
		finalFile.close()
		print(jteam[0],',',jteam[1],',',jteam[2].replace(u'\xa0',u''),',',rawpassword)
		query = "Insert into "+table_name+"(id, name, email, password, role, created_at, updated_at) values (%s, %s, %s, %s, %s, %s, %s)"
		mycursor.execute(query, data)
		mydb.commit()
		mycursor.close()
		mydb.close()
		judges[jteam[2]] = jteam[0].replace("ï»¿", '')

def getRawPassword(length=15):
	letters = string.ascii_letters
	result_str = ''.join(random.choice(letters) for i in range(length))
	return result_str

def getHashedPassword(password):
	passwd = bytes(password, 'utf-8')
	salt = bcrypt.gensalt(rounds=10)
	hashed = bcrypt.hashpw(passwd, salt)
	if bcrypt.checkpw(passwd, hashed):
	    return hashed
	else:
	    print("does not match")


import csv
with open('judgesxteams NEW.csv', 'r') as file:
    reader = csv.reader(file)
    for row in reader:
        #print(row)
        print(row[0].split(','))
        addJudgeTeamRecord(row[0].split(","))
        addJudgeRecord(row[0].split(','))
#getPassword("Muhammad")
with open('teams_list_original.txt', 'r') as file:
    readerteams = csv.reader(file, delimiter = '(')
    for row in readerteams:
        #print(row)
       	addTeamRecord(row)
#read .csv file 
#read .txt file (split on "(")

