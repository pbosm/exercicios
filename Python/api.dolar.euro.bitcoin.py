# -*- coding: utf-8 -*-

import requests 

url = 'https://economia.awesomeapi.com.br/all/USD-BRL'
urlEur = 'https://economia.awesomeapi.com.br/all/EUR-BRL'
urlBtc = 'https://economia.awesomeapi.com.br/all/BTC-BRL'

response = requests.get(url)

if response.status_code == 200:
    dolar_value = response.json()['USD']['low']
    
    print(f'O valor do Dólar é R${dolar_value}')
else:
    print('Erro ao buscar o valor do Dólar')
    
response2 = requests.get(urlEur)
    
if response2.status_code == 200:
    euro_value = response2.json()['EUR']['low']
    
    print(f'O valor do Euro é R${euro_value}')
else:
    print('Erro ao buscar o valor do Dólar')
    
response3 = requests.get(urlBtc)
    
if response3.status_code == 200:
    bitcoin_value = response3.json()['BTC']['low']
    
    print(f'O valor do Bitcoin é R${bitcoin_value}')
else:
    print('Erro ao buscar o valor do Dólar')



