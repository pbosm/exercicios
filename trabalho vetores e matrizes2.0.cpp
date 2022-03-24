#include<iostream>
using namespace std;

void relatorio ()
{
	cout<<endl<<"Relatório Geral"<<endl; //RELATORIO SAIDA
	cout<<"Nome\tResposta(s)"<<endl;
}

void aprovado_e_reprovado ()
{
	cout<<endl<<"Relatório De Classificados e Desclassificados"<<endl; //RELATORIO CLASSIFICADOS/DESCLASSIFICADOS
	cout<<"Nome\tSituação\tNota"<<endl;
}

float valor(int Q)
{
	return 10.0/Q;
}

void linha ()
{
	cout<<"-----------------------------------------------";
	cout<<endl;
}

main()
{
	setlocale(LC_ALL,"portuguese");
	
	int C, Q;
	float valor_da_questao;
	
	cout<<"Quantidade de candidatos: ";
	cin>>C;
	cout<<"Quantidade de questões: ";
	cin>>Q;
	
	int l, c, cont_apro=0, cont_repro=0;
	float nota[C], cont, soma=0, maior_nota=0, menor_nota=99999999, acertos[Q]={0};
	string nome[C];
	char gabarito[Q], respostas[C][Q];
	
		for (c=0; c<Q; c++)
		{
			do{
			cout<<"Gabarito "<<c+1<<" (Questões aceitas A, B, C, D e E)"<<": "; // entrada gabarito
			cin>>gabarito[c];			
			}while (gabarito[c]!='A'  //para aceitar apenas letras A,B,C,D,E
			and gabarito[c]!='B' 
			and gabarito[c]!='C'
			and gabarito[c]!='D'
			and gabarito[c]!='E');			
		}
			linha();
	
		for(l=0; l<C; l++) //linha, entrada do aluno, C=canditado
		{	
			cout<<"Nome do candidato: ";
			cin>>nome[l]; 
	
		for(c=0; c<Q; c++) //c=colunas, entrada da respostas
		{
			do
			{
			cout<<"Respostas "<<c+1<<" (Respostas aceitas A, B, C, D e E)"<<": ";
			cin>>respostas[l][c];
			}while (respostas[l][c]!='A'  	//apenas respostas com a letras A,B,C,D,E
			and respostas[l][c]!='B' 		//and respostas[l][c]!='a' poderia ter colocado isso também para ser letras minusculas porém no exercicio tava só letras maiusculas A,B,C,D,E
			and respostas[l][c]!='C' 
			and respostas[l][c]!='D'
			and respostas[l][c]!='E');
			
			if(respostas[l][c]==gabarito[c])
			{
			cont++;
			acertos[c]++;
			}
		}
			valor_da_questao=valor(Q);
			nota[l]=(valor_da_questao*cont);	
			cont=0;  //para não acumular a notas anteriores	
			soma = soma+nota[l];
			cout<<"-----------------------------------------------";
			cout<<endl;					
		}
		
			relatorio(); //RELATORIO SAIDA
	
	
		for(l=0; l<C; l++) //linha, saida 
		{
			cout<<nome[l]<<"\t";
				
			for(c=0; c<Q; c++) //colunas, saida da notas
			{
			cout<<respostas[l][c]<<"\t";
			}	
			cout<<" Sua nota: "<<nota[l]<<endl;	
		}		
	
			aprovado_e_reprovado (); //RELATORIO APROVADO/REPROVADO
	
		for(l=0; l<C; l++) //linha, saida 
		{
			cout<<nome[l]<<"\t";			
			if(nota[l]>maior_nota)    // MAIOR NOTA
			{
			maior_nota = nota[l]; 	//MAIOR
			}
			if(nota[l]<menor_nota) //MENOR NOTA
			{
			menor_nota = nota[l]; 	//MENOR
			}
			if(nota[l]>=5)
			{				
			cout<<"Aprovado"; 		//CONTADOR APROVADO 
			cont_apro++;
			}
			else
			{
			cout<<"Reprovado";	//CONTADOR REPROVADO
			cont_repro++;
			}
			cout<<"\t"<<nota[l]<<endl;			
		}			
					//saida da média, e outros calculos
			cout<<endl<<"A média geral dos candidatos é: "<<soma/C<<endl;
			cout<<"Quantidade de Classificados : "<<cont_apro<<endl;
			cout<<"Quantidade de Desclassficados : "<<cont_repro<<endl;
			cout<<"% de alunos Classificados : "<<cont_apro*100.0/C<<"%"<<endl;
			cout<<"% de alunos Desclassificados : "<<cont_repro*100.0/C<<"%"<<endl;				
				
					// MAIOR NOTA SAIDA
			cout<<endl<<"A maior nota é "<<maior_nota<<" do(s) seguinte(s) candidato(s):"<<endl;
			for (l=0; l<C; l++)
			{
				if(nota[l] == maior_nota)
				{
					cout<<nome[l]<<endl;
				}
			}			
				    // MENOR NOTA SAIDA		
			cout<<"A menor nota é "<<menor_nota<<" do(s) seguinte(s) candidato(s):"<<endl;
			for (l=0; l<C; l++)
			{
				if(nota[l] == menor_nota)
				{
					cout<<nome[l]<<endl;
				}
			}
					
			for (c=0; c<Q; c++)
			{							
				 cout<<endl<<"Acertos questão "<<c+1<<": "<<acertos[c]*100.0/C<<"%"<<endl;	
			}								
}
