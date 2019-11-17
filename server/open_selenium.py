from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
import time
import pymysql
import os
import webbrowser
import json
import collections

# Open database connection
db = pymysql.connect("localhost", "root", "", "bd_json")

# Prepare a cursor object using cursor() method
cursor = db.cursor()

# Select all terms
sql = "SELECT * FROM `termo`"

try:
    # Execute the SQL command
    cursor.execute(sql)

    # Fetch all the rows in a list of lists
    results = cursor.fetchall()

    for row in results:
        id_termo = row[0]
        termo = row[1]

        print("id_termo = %d,  termo = %s" %
              (id_termo, termo))
        driver = webdriver.Chrome(ChromeDriverManager().install())
        driver.get("https://www.google.com/search?q="+termo)

        for item in driver.find_elements_by_class_name("rc")[0:5]:
            a = item.find_element_by_tag_name("a")
            print(a.get_property('href'))
            #sql_2 = "INSERT INTO `busca` (id_termo, link) VALUES ('id_termo', 'a.get_property('href')')"
            cursor_2 = db.cursor()

            try:
                    # Commit your changes in the database
                cursor_2.execute(
                    "INSERT INTO `busca` (id_termo, link) VALUES (%s, %s)", (id_termo, a.get_property('href')))
                db.commit()
            except pymysql.Error as exc:
                print("error inserting...\n {}".format(exc))
                # Rollback in case there is any error
                db.rollback()

        # driver.quit()
 #       driver.close()
        # db.close()

except:
    print("Error: unable to fetch data")


cursor = db.cursor()

# Select all terms
sql = "SELECT id_termo, link FROM `busca`"
cursor.execute(sql)

rows = cursor.fetchall()



# Convert query to objects of key-value pairs
objects_list = []
for row in rows:
    #print(row[0])
    #print(row[1])
    d = collections.OrderedDict()
    d['id_termo'] = row[0]
    d['link'] = row[1]
    objects_list.append(d)
j = json.dumps(objects_list)
objects_file = 'search_results.js'
f = open(objects_file,'w')
f.write(j)
f.close()


db.close()


filename = 'http://localhost/selecao_php/view/exibe_bd.php'
webbrowser.open_new_tab(filename)