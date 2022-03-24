#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"portuguese");
	
	string nome[100];
	int idade[100], i=0, cont;
	char resp;
	
	do
	{
		cout<<"Nome : ";
		cin>>nome[i];
		cout<<"Idade: ";
		cin>>idade[i];
		cout<<nome[i]<<" tem "<<idade[i]<<" anos."<<endl;
		i++;
		do
		{
		cout<<"Deseja continuar (S/N)?";
		cin>>resp;
		} while (resp!='s' and resp!='S' and resp!='n' and resp!='N');
			
	} while (resp=='s' or resp=='S');
	
	for (cont=0; cont<i; cont++)
	{
		cout<<nome[cont]<<"\t"<<idade[cont]<<endl;
	}
}
