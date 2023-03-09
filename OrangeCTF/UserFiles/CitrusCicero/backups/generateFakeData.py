import sqlite3
import base64
import random

conn = sqlite3.connect('old-website-backup.db')
c = conn.cursor()

c.execute('''
    CREATE TABLE users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        fname TEXT NOT NULL,
        lname TEXT NOT NULL,
        username TEXT NOT NULL,
        password TEXT NOT NULL
    )
''')

passList = []
userList = []
namesList = []

with open("rockyou-1000.txt") as fout1:
    passList = fout1.readlines()

with open("usernames.txt") as fout2:
    userList = fout2.readlines()

with open("names.txt") as fout3:
    namesList = fout3.readlines()

for i in range(1000):
    if i == 567: # place citrus cicero in there
        fname = "Citrus"
        lname = "Cicero"
        username = "citrus-cicero"
        password = "LimeIsMyFavorite"
    elif i == 859: # place orange brutus in there
        fname = "Orange"
        lname = "Brutus"
        username = "orange-brutus"
        password = "3ttuBrut3s"
    else:
        # randomly choose their first and surname from the dataset
        fname = namesList[random.randint(1,999)].capitalize()
        lname = namesList[random.randint(1,999)].capitalize()
        username = userList[i]
        password = passList[i]
    
    # encode the data twice to make it look like it's encrypted
    passwordBytes = password.encode('ascii')
    # layering
    passwordBytes = base64.b64encode(base64.b64encode(passwordBytes))
    password = passwordBytes.decode('ascii')

    # actual insert
    c.execute('INSERT INTO users (fname, lname, username, password) VALUES (?, ?, ?, ?)', (fname, lname, username, password))

conn.commit()
conn.close()
