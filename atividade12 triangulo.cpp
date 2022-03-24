#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");	
	int a, b, c;
	char resposta='s';
	
	do{
		
	cout<<"Digite o 1º valor: ";
	cin>>a;
	cout<<"Digite o 2º valor: ";
	cin>>b;
	cout<<"Digite o 3º valor: ";
	cin>>c;
	

	if (a + b > c and a + c > b and b + c > a)
	{		
		cout<<"Os três lados formam um triângulo"<<endl;
		if (a == b and a == c )
		{
		cout<<"Equilatero"<<endl;
		}			 
        else 
		if (a == b or a == c or b == c)
        {	
		cout<<"Isosceles"<<endl;
		}
		else
		{ 
		cout<<"Escaleno"<<endl;	
		}
	}
	else 
	{	
	cout<<"Os três lados não formam um triângulo"<<endl;
	}	
	cout<<"Deseja inserir outros valores? (S/N)? ";
	cin>>resposta;	
	}while(resposta=='s' or resposta=='S');	
}


