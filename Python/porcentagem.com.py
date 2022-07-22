# -*- coding: utf-8 -*-
    

valorObjeto = float(input("\nDigite o preço: "))
valorDesconto = float(input("Digite o desconto: "))

calculo = valorObjeto*valorDesconto/100.0
calculoend = valorObjeto-calculo

print(f'\nVocê ira economizar: {calculo}')
print(f'Total a pagar com desconto: {calculoend}')

    
