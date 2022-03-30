#include<iostream>
using namespace std;

int op; //variavel global

void quadrado()
{
	int lado, area; //variavel local
	cout<<"Cálculo do quadrado"<<endl;
	cout<<"Digite o lado: ";
	cin>>lado;
	area=lado*lado;
	cout<<"A área é "<<area<<endl;
}

void triangulo()
{
	cout<<"Em manutenção"<<endl;
}

void circuferencia()
{
	cout<<"Em manutenção"<<endl;
}

void menu_principal()
{
	cout<<"Menu Principal"<<endl;
	cout<<"1-Quadrado"<<endl;
	cout<<"2-Triangulo"<<endl;
	cout<<"3-Circuferência"<<endl;
	cout<<"4-Sair"<<endl;
}
void leia_op()
{
	do{
	cout<<"Opção ==> ";
	cin>>op;
		if (op<=0 or op>=5) cout<<"Resposta inválida"<<endl;
	}while (op<=0 or op>=5);
}

main()
{
	setlocale(LC_ALL,"portuguese");	
	
do
{	
	menu_principal();
	
	leia_op();
	
	
	if (op==1) // quadrado
	{
		quadrado();
	}
	else if (op==2) //triangulo
	{
		triangulo();
	}
	else if (op==3) // circuferencia
	{
		circuferencia();
	}
	else 
	{
		cout<<"O programa será finalizado!"<<endl;		
	}
	system("cls");
	
}while (op!=4);
	
}
