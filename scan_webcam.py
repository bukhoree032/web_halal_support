import cv2
import numpy as np
import pyzbar.pyzbar as pyzbar
r=1
cap = cv2.VideoCapture(0)
font = cv2.FONT_HERSHEY_PLAIN

while True:
    _, frame = cap.read()

    decodedObjects = pyzbar.decode(frame)
    for obj in decodedObjects:
        print(obj.data)
        #cv2.putText(frame, str(obj.data), (50, 50), font, 2,
                    #(255, 0, 0), 3)
        r=r+1

    #cv2.imshow("Frame", frame)
    if r == 1:
        break
    
    #key = cv2.waitKey(1)
    #if key == 27:
        #break
