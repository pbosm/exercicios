/*Faça um programa para ler o nome e o salário bruto de N funcionários, onde N deve ser lido no início do programa.
Para cada funcionário deverá ser informado:
- O desconto de INSS que é de 8% do salário bruto;
- O desconto de imposto de renda (IR) que será de:
-- 0% (isento) para salário bruto menor que R$1800;
-- 10% para salário bruto maior ou igual a R$ 1800 e menor que R$ 3000;
-- 20% para salário bruto maior ou igual a R$ 3000 e menor que R$ 5000; e
-- 30% para salário bruto maior ou igual a R$ 5000.
- O salário líquido (salário bruto menos os descontos).
Após a entrada dos dados, gerar:
- Um relatório geral apresentando todos os dados: nome, salário bruto, INSS, IR e salário líquido. Ao final deste relatório apresente os totais de: salário bruto, INSS, IR e salário líquido;
- A média salarial líquida;
- Um relatório contendo o nome e o salário líquido dos funcionários que estejam abaixo da média salarial líquida; e
- O percentual de funcionário isentos de IR.
*/ 

#include<iostream>
using namespace std;
main()
{
	setlocale(LC_ALL,"portuguese");	
	int N, i, cont_zero=0, cont_dez=0, cont_vinte=0, cont_trinta=0;
		
	cout<<"Qual a quantidade de funcionários? "; 
	cin>>N;  

	string nome[N];
	float salario[N], media[N], INSS[N], IR[N], descontoinss[N], descontoir[N], soma=0;//salarioliquido[i],desconto0[i],desconto10[i],desconto20[i],desconto30[i];
	
		for (i=0; i<N; i++)
	{
		cout<<"Nome do funcionário: "; 
		cin>>nome[i];	
		cout<<"Salário bruto "; 
		cin>>salario[i];
		cout<<"Qual é o desconto do INSS: "; 
		cin>>INSS[i];
		cout<<"Qual é o desconto do IR: "; 
		cin>>IR[i];
		descontoinss[i]=(salario[i]*INSS[i])/100;		
		descontoir[i]=(salario[i]*IR[i])/100;
		cout<<endl;	
		
	}
	
		for (i=0; i<N; i++) 
	{		
		cout<<"Nome do Funcionário: "<<nome[i]<<", seu salário: "<<salario[i]<<", desconto do INSS: "<<INSS[i];
		if (salario[i]<1800)
		{	
		cout<<"% Seu (IR) será de: 0% "<<", Salário Líquido: "<<salario[i]-descontoir[i]-descontoinss[i]<<endl;
		cont_zero++;
		}
		else
		if (salario[i]>=1800 and salario[i]<3000)
		{
		cout<<"% Seu (IR) será de: 10% "<<", Salário Líquido: "<<salario[i]-descontoir[i]-descontoinss[i]<<endl;
		cont_dez++;
		}		
		else
		if (salario[i]>=3000 and salario[i]<5000)
		{
		cout<<"% Seu (IR) será de: 20% "<<", Salário Líquido: "<<salario[i]-descontoir[i]-descontoinss[i]<<endl;
		cont_vinte++;
		}
		else
		if (salario[i]>=5000)
		{
		cout<<"% Seu (IR) será de: 30% "<<", Salário Líquido: "<<salario[i]-descontoir[i]-descontoinss[i]<<endl;
		cont_trinta++;
		}
		soma = soma+salario[i]-descontoir[i]-descontoinss[i];
	}	
		cout<<"Média de sálario é: "<<soma/N<<endl;
		cout<<"--------------------------------------------------------------------------------------------------------------------"<<endl;
			
		for (i=0; i<N; i++) 
	{		
		if (salario[i]-descontoir[i]-descontoinss[i]<soma/N)
		{		
		cout<<nome[i]<<" está a baixo da média salárial"<<", seu salário é: "<<salario[i]-descontoir[i]-descontoinss[i]<<endl;
		}		
	}	
	 	cout<<"--------------------------------------------------------------------------------------------------------------------"<<endl;
	 	cout<<"O percentual de funcionário isentos de IR é de: "<<cont_zero*100.0/N<<"%"<<nome[i]<<"      "<<endl;
}		




		



































