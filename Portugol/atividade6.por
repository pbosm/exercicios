/*
 * Programa para ler 3 notas e, através da média, informar o conceito correspondente, 
 * sendo que os conceitos são:
 * A: quando a média for >=9 e <=10
 * B: quando a média for >=8 e <9
 * C: quando a média for >=7 e <8
 * D: quando a média for >=6 e <7
 * E: quando a média for <6
 * 
 */

programa
{
	
	funcao inicio()
	{
		caracter conceito='?'
		real n1, n2, n3, m
		
		escreva("Nota 1: ")
		leia(n1)
		escreva("Nota 2: ")
		leia(n2)
		escreva("Nota 3: ")
		leia(n3)

		m=(n1+n2+n3)/3

		se (m>=9) 
		{
			conceito='A'
		}
		 senao
		 se (m>=8)
		{
			conceito='B'
		}
		 senao
		 se (m>=7)
		{
			conceito='C'
		}
		senao 
		se (m>=6)
		{
			conceito='D'
		}
		
		se (m<6)
		{
			conceito='E'
		}

		escreva("A média foi ", m ," e o conceito ", conceito)
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 685; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */