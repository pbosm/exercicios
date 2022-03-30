#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");	
	int numero[5], i;
	
	for (i=0; i<5; i++) //entrada
	{
		cout<<"Digite o "<<i+1<<"º número: "; cin>>numero[i];
	}
	
	for (i=0; i<5; i++) //saida
	{
		cout<<"Número["<<i+1<<"º]: "<<numero[i]<<endl;
	}
}
