#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"portuguese");
	int N, i, IR;
	float somaSB=0, somaINSS=0, somaIR=0, somaSL=0, maiorSB=0, menorSB=999999; //no menor tem que ser bem grande o valor no caso 99999
	cout<<"Quantos funcionários: ";
	cin>>N;
	string nome[N];
	float sal_bruto[N], desc_INSS[N], desc_IR[N], sal_liquido[N];
	system("color 1F");
	
	for (i=0; i<N; i++)
	{
		cout<<endl<<"Nome do funcionário: ";
		cin>>nome[i];
		cout<<"Salário Bruto   : ";		
		cin>>sal_bruto[i];	
			
		if(sal_bruto[i]>maiorSB)
		{
			maiorSB = sal_bruto[i];
		}
			
		if(sal_bruto[i]<menorSB)
		{
			menorSB = sal_bruto[i];
		}
	
		desc_INSS[i]=sal_bruto[i]*0.08;	
		
		if(sal_bruto[i]<1800) {desc_IR[i]=0; IR=0;}
		else if (sal_bruto[i]<3000) {desc_IR[i]=sal_bruto[i]*0.1; IR=10;}//ou *10/100 embora o 0.1 que é 10% seja melhor forma
		else if (sal_bruto[i]<5000) {desc_IR[i]=sal_bruto[i]*0.2; IR=20;}// ou *20/100 embora o 0.2 que é 20% seja melhor forma
		else {desc_IR[i]=sal_bruto[i]*0.3; IR=30;} // ou *30/100 embora o 0.3 que é 30% seja melhor forma
		sal_liquido[i]=sal_bruto[i]-desc_INSS[i]-desc_IR[i]; // poderia ser sal_bruto[i]-(desc_INSS[i]+desc_IR[i])
		
		
			//saidas
			cout<<"Desconto do INSS (8%): "<<desc_INSS[i]<<endl;	
			cout<<"Desconto de IR ("<<IR<<"%) : "<<desc_IR[i]<<endl;
			cout<<"Salário Líquido : "<<sal_liquido[i]<<endl;
			
			
	}
			//system("pause"); caso queira dar pause
			cout<<endl<<"Relatório Geral"<<endl;
			cout<<"Nome\tSal.Bruto\tINSS\tIR\tSal.Líquido"<<endl;
			cout<<"-----------------------------------------"<<endl;
			for (i=0; i<N; i++)
		{
			cout<<nome[i]<<"\t"<<sal_bruto[i]<<"\t\t"<<desc_INSS[i]<<"\t"<<desc_IR[i]<<"\t"<<sal_liquido[i]<<"\t"<<endl<<endl;
			somaSB+=sal_bruto[i];    //soma salario bruto
			somaINSS+=desc_INSS[i];  //soma INSS
			somaIR+=desc_IR[i];      //soma imposto de renda
			somaSL+=sal_liquido[i];  //soma salario liquido
		}
			cout<<"-----------------------------------------"<<endl;
			cout<<"TOTAL\t"<<somaSB<<"\t\t"<<somaINSS<<"\t"<<somaIR<<"\t"<<somaSL<<endl<<endl;
			
			cout<<endl<<"O maior salário é "<<maiorSB<<" do(s) seguinte(s) funcionário(s):"<<endl;
			for (i=0; i<N; i++)
			{
				if(sal_bruto[i] == maiorSB)
				{
					cout<<nome[i]<<endl;
				}
			}
			
			cout<<endl<<"O menor salário é "<<menorSB<<" do(s) seguinte(s) funcionário(s):"<<endl;
			for (i=0; i<N; i++)
			{
				if(sal_bruto[i] == menorSB)
				{
					cout<<nome[i]<<endl;
				}
			}
}
