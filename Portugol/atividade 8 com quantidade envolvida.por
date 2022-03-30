programa 

//*Um time de basquete possui N jogadores, onde N deve ser lido no início do programa.
//*Para cada jogador leia o seu nome e a altura e determine em que categoria ele se encontra segundo o critério abaixo:
//*- Categoria A: para altura >= 2.10
//*- Categoria B: para altura >= 1.90 e < 2.10
//*- Categoria C: para altura < 1.90.
//*Ao final apresente:
//*- A quantidade de jogadores que estão na cat. A;
//*- A quantidade de jogadores que estão na cat. B; e
//*- A quantidade de jogadores que estão na cat. C.

{
	
	funcao inicio()
	{
		caracter nome, categoria='?'
		real altura
		inteiro cont_A=0, cont_B=0, cont_C=0, contador=1, N


		escreva("Quantos jogadores possui o time? ")
		leia(N)

		enquanto (contador<= N)
		{
			escreva("Qual o nome do jogador? ")
			leia(nome)

			escreva("Qual a altura do jogador? ")
			leia(altura)
			
	      se (altura>=2.10) 
		{
			categoria='A'
			cont_A = cont_A + 1 		
		}
		 senao
		 se (altura>=1.90)
		{
			categoria='B' 
			cont_B = cont_B + 1
		}
		 senao
		 se (altura<1.90)
		{
			categoria='C' 
			cont_C = cont_C + 1
		}	
		 escreva("A Categoria do jogador é " ,categoria, "\n\n")
		 contador = contador + 1  			
		}
		 escreva("A quantidade de jogadores que estão na categoria A é ", cont_A, "\n\n")
		 escreva("A quantidade de jogadores que estão na categoria B é ", cont_B, "\n\n")
		 escreva("A quantidade de jogadores que estão na categoria C é ", cont_C, "\n\n")
				 		
    	    
     }
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 1456; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */