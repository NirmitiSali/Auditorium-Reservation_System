# pip install matplotlib
# pip install pymysql
__author__ = 'silvianittel'
import pymysql
cnx = pymysql.connect(host='localhost', port=3306, user='guest', passwd='guest123', db='audi_reservtion')
cursor = cnx.cursor()
query = ("SELECT * FROM signup;")
cursor.execute(query)
print()
for row in cursor:
    print(row)

cursor.close()
cnx.close()