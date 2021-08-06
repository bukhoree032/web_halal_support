import pymysql.cursors
import cv2
import numpy as np


# Connect to the database
con= pymysql.connect(host='localhost',
                             user='root',
                             password='',
                             db='web_ingredients_db',
                             charset='utf8mb4',
                             cursorclass=pymysql.cursors.DictCursor)

max1 = 155
with con: 

    cur = con.cursor()
    cur.execute("SELECT * FROM halal_main_pic WHERE main_pic_ip_id LIKE 'P%' ")

    rows = cur.fetchall()

    for row in rows:
      nameimg = "imag" + "/" + row["main_pic_pic"]
      img1 = cv2.imread (nameimg, cv2.IMREAD_GRAYSCALE)
      img2 = cv2.imread ("pagkage/1.png", cv2.IMREAD_GRAYSCALE)

      #ORB Detector
      orb = cv2.ORB_create ()
      kp1, des1 = orb.detectAndCompute (img1, None)
      kp2, des2 = orb.detectAndCompute (img2, None)

      #Brute Force Matching

      bf = cv2.BFMatcher(cv2.NORM_HAMMING, crossCheck=True)
      matches = bf.match (des1, des2)
      matches = sorted (matches, key = lambda x:x.distance)

      #print (len (matches))
      _ = (len (matches))
      if (_ > max1):
          max1 = _
          print (row["main_pic_ip_id"])
