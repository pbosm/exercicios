#include<iostream>
using namespace std;

int main()
{
	int r, i, j ,s;
	
	cout<<"Digite um número: ";
	cin>> r;
	
	for(i=1; i<=r; i++)
	{
		//for para espaço na piramide
		for(s=i; s<r; s++)
		cout<<" ";
		//for para mostrar a *
		for(j=1; j<=(2 * r - 1); j++)
		{
			if(i == r || j == 1 || j==2*i-1)
			cout<<"*";
			else
			cout<<" ";
		}
		//linha apos linha
		cout<<"\n";
	}

}
