#include<iostream>
using namespace std;
/*
Ler nome e duas notas para N alunos, onde deve ser lido no início do programa.
Informar situação e média para cada aluno.
Ao final:
- Gerar o relatório de todos os alunos contendo nome, notas, média e situação;
- Gerar os percentuais de aprovados e reprovados;
- Gerar o relatório dos alunos aprovados;
- Gerar a média da turma.
*/

main()
{
	setlocale(LC_ALL,"portuguese");	
	int N, i, cont_apro=0, cont_repro=0;
	float soma=0;	
	
	cout<<"Qual a quantidade de alunos? "; 
	cin>>N;  
	 // colocar essa antes pq senão vai dar errado
	
	string Aluno[N];
	float n1[N], n2[N], media[N];


	for (i=0; i<N; i++)
	{
		cout<<"Aluno: "; 
		cin>>Aluno[i];	
		cout<<"Digite a 1º nota: "; 
		cin>>n1[i];
		cout<<"Digite a 2º nota: ";
		cin>>n2[i];
		media[i]=(n1[i]+n2[i])/2;
		cout<<endl;	
		
	}
	cout<<"Relatório de Alunos"<<endl;
	cout<<"-------------------"<<endl;
	cout<<"Aluno\tNota 1\tNota 2\tMédia\tSituação"<<endl;
	cout<<"----------------------------------------"<<endl;
	for (i=0; i<N; i++) 
	{		
		cout<<Aluno[i]<<"\t"<<n1[i]<<"\t"<<n2[i]<<"\t"<<media[i]<<"\t";
		if (media[i]>=6)
		{	
		cout<<"APROVADO com a média: "<<media[i]<<endl;
		cont_apro++;
		}
		else 
		{
		cout<<"Reprovado com a média: "<<media[i]<<endl;
		cont_repro++;
		}
		soma = soma+media[i];
	}
		
	cout<<endl;
	cout<<"Relatório de Alunos Aprovados"<<endl;
	cout<<"-------------------------------"<<endl;
	cout<<"Aluno\tNota 1\tNota 2\tMédia"<<endl;
	cout<<"--------------------------------"<<endl;
		
	for (i=0; i<N; i++) 
	{		
		if (media[i]>=6)
		{		
		cout<<Aluno[i]<<"\t"<<n1[i]<<"\t"<<n2[i]<<"\t"<<media[i]<<endl;
		}		
	}
	cout<<endl<<"A média da turma é "<<soma/N<<endl;
	cout<<endl<<"% de alunos aprovados: "<<cont_apro*100.0/N<<"%"<<endl;
	cout<<"% de alunos reprovados: "<<cont_repro*100.0/N<<"%"<<endl;
}
