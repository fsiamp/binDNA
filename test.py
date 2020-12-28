#!/usr/bin/env python

import random
from random import randint

filename = randint(1000000000000, 9999999999999)

file = open("examples/" + str(filename) + ".data","w")
 
inputDNA = ['G','C','T','A'];

for i in range(1,40):

   for num in range(1,100):
      file.write(random.choice(inputDNA))

   file.write("\n")
    
file.close()
