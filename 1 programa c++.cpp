
//comentário de linha

/*
comentário de 
multiplas
linhas

Variáveis:
inteiro: int
real: float
caracter: char
cadeia: string
Obs.: a regra para indetificação das variáveis é a mesma que no Portugal Studio

*/

#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");
	int n1,n2;
	float M;
	
	cout<<"Digite o primeiro número: ";    // escreva("Digite o primeiro número: ")
	cin>>n1;                              //  leia(n1)
	cout<<"Digite o segundo número: ";
	cin>>n2;
	
	M = (n1 + n2) / 2.0;
	
	cout<<"A média é "<<M<<"\n"<<endl;
	
	system("pause");
	
}
