#include<iostream>
using namespace std;

/*Faça um programa para ler o nome do aluno e suas duas notas para uma turma de 5 alunos.
Após a entrada dos dados, gere um relatório geral apresentando todos os dados solicitados na entrada. 
Para isso, os dados de entrada deverão ser vetores.
Desafio (facultativo): na apresentação do relatório incluir o cálculo da média.*/


main()
{
	setlocale(LC_ALL,"portuguese");	
	float Soma=0, Media, n1[5], n2[5];
	int i;
	string Aluno[5];
	

	for (i=0; i<5; i++)
	{
		cout<<"Aluno: "; 
		cin>>Aluno[i];	
		cout<<"Digite a 1º nota: "; 
		cin>>n1[i];
		cout<<"Digite a 2º nota: ";
		cin>>n2[i];
		cout<<endl;	
		
	}
	
	for (i=0; i<5; i++) 
	{
		Soma = n1[i] + n2[i];
		Media = Soma / 2;		
		cout<<Aluno[i]<<" Sua 1º nota é: "<<n1[i]<<", Sua 2º é: "<<n2[i]<<", Sua Média é: "<<Media<<endl;
		// poderia ser, cout<<Aluno[i]<<" Sua 1º nota é: "<<n1[i]<<", Sua 2º é: "<<n2[i]<<", Sua Média é: "<<(n1[i]+n2[i])/2<<endl
	}
}

