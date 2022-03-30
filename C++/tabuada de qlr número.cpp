#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");	
	int n1, n2;
	char resposta='s';
	
	while(resposta=='s' or resposta=='S')
	
	{	
		cout<<"Digite o número para gerar a tabuada: ";
		cin>>n1;
		
		for (n2 = 0; n2<=15;n2++)
		{
			cout<<n1<<" * "<<n2<<" = "<<n1*n2<<endl;
		}
		cout<<"Deseja continuar (S/N)? ";
		cin>>resposta;
	}
}
	
	
