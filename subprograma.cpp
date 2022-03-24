#include<iostream>
using namespace std;

void teste1()
{
	cout<<"Agora eu estou no subprograma TESTE1"<<endl;
}

void teste2()
{
	cout<<"E, agora eu estou no subprograma TESTE2"<<endl;
}

void linha(char C, int QT)
{	
	int i;
	//substituir cout<<"-----------------------------------"<<endl;
	for (i=1; i<=QT; i++)
	{
		cout<<C;
	}
		cout<<endl;
}

main ()
{
	char caracter;
	
	cout<<"Olá! Tudo bem?"<<endl;
	linha('*', 10);
	teste1();
	teste2();
	linha('x', 20);
	cout<<"Qual caracter para repetir?";
	cin>>caracter;
	linha(caracter,30);
}
