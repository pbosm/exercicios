# -*- coding: utf-8 -*-
    

valorObjeto = float(input("\nDigite o preço: "))
valorDesconto = float(input("Digite o desconto: "))

calculoeconomia = valorObjeto*valorDesconto/100
calculototal = valorObjeto-calculoeconomia
calculoacrescimo = valorObjeto + calculoeconomia


"""calculototal = valorObjeto * (1-valorDesconto/100)
calculoeconomia = valorObjeto - calculoeconomia
calculoacrescimo = valorObjeto * (1+valorDesconto/100)"""


print(f'\nVocê ira economizar: {calculoeconomia}')
print(f'Total a pagar com desconto: {calculototal}')
print(f'\nValor com Acrescimo de {valorDesconto}, totalizando: {calculoacrescimo}')

    
