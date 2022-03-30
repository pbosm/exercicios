#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");	
	int idade[3], i;
	string nome[3];
	
	for (i=0; i<3; i++)
	{
		cout<<"Nome: "; cin>>nome[i];
		cout<<"Idade: "; cin>>idade[i];
	}
	
	for (i=0; i<3; i++) 
	{
		cout<<nome[i]<<" tem "<<idade[i]<<" anos."<<endl;
	}
}

