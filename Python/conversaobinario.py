# -*- coding: utf-8 -*-

import numpy as np

numero = int(input("\nDigite o número para conversão há binario: "))
sobra = numero
numero = numero 
sobra = numero
binario = ""
while(sobra >= 1):
    binario = binario + str(sobra%2)
    sobra = sobra//2
binario = binario[::-1]
print(f'O binario é: {binario}')
