#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"portuguese");
	
	int M[3][3], l, c;
	
	for(l=0; l<3; l++) //entrada
	{
		for(c=0; c<3; c++)
		{
			cout<<"Digite um valor ["<<l<<","<<c<<"]: ";
			cin>>M[l][c];  //l=linha, c=coluna
		}
	}

	for(l=0; l<3; l++) //saída
	{
		for(c=0; c<3; c++)
		{
			cout<<M[l][c]<<"\t";  //l=linha, c=coluna
		}
			cout<<endl;
	}


}
