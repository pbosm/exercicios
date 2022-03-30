#include<iostream>
using namespace std;

main()
{
	setlocale(LC_ALL,"portuguese");
	
	string time1, time2;
	float winratioseason1, winratioseason2, topwin, jgwin, midwin, adwin, supwin, topwin2, jgwin2, midwin2, adwin2, supwin2, soma1=0, soma2=0;


	cout<<"Qual é o nome do 1 time? ";
	cin>>time1;
	//cout<<"Qual é a Winratio de season do time? ";
	//cin>>winratioseason1;
	cout<<"Winratio TOP laner: ";
	cin>>topwin;
	cout<<"Winratio Jungler: ";
	cin>>jgwin;
	cout<<"Winratio Mid laner: ";
	cin>>midwin;
	cout<<"Winratio Adcarry: ";
	cin>>adwin;
	cout<<"Winratio Support: ";
	cin>>supwin;
	
	soma1 = soma1+topwin+jgwin+midwin+adwin+supwin;
	cout<<endl<<"Calculo do 1 time: "<<soma1/5<<"%";
	
	cout<<endl<<"-----------------------------------";

	cout<<endl<<"Qual é o nome do 2 time? ";
	cin>>time2;
//	cout<<"Qual é a Winratio de season do time? ";
//	cin>>winratioseason2;
	cout<<"Winratio TOP laner: ";
	cin>>topwin2;
	cout<<"Winratio Jungler: ";
	cin>>jgwin2;
	cout<<"Winratio Mid laner: ";
	cin>>midwin2;
	cout<<"Winratio Adcarry: ";
	cin>>adwin2;
	cout<<"Winratio Support: ";
	cin>>supwin2;
	
	soma2 = soma2+topwin2+jgwin2+midwin2+adwin2+supwin2;
	cout<<endl<<"Calculo do 2 time: "<<soma2/5<<"%";

	cout<<endl<<"-----------------------------------";
	
	
}
