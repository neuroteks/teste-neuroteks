from selenium import webdriver
import requests
import json
import time

A = requests.get('http://localhost/neuroteks/service.php')
termos = json.loads(A.text)

link_list = []
driver = webdriver.Chrome(executable_path=r"C:\WebDriver\chromedriver.exe")

for termo in termos:
    driver.get("https://www.google.com.br/search?q=" + termo['nome'])

    for link in driver.find_elements_by_class_name("rc")[0:5]:
        link = link.find_element_by_tag_name('a').get_attribute('href')
        dict = {"termo":termo, "link":link}
        link_list.append(dict)
        print(link)
    time.sleep(1)

x = requests.post("http://localhost/neuroteks/service.php", data = json.dumps(link_list))

driver.get("http://localhost/neuroteks/View/view.php");

