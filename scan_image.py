import cv2
import numpy as np
import pyzbar.pyzbar as pyzbar

image = cv2.imread ("pagkage/1.png")

decodedObjects = pyzbar.decode(image)
for obj in decodedObjects:
    print(obj.data)
    break

