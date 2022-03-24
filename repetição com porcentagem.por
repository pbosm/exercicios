programa 
{
	
	
	funcao inicio()
	{
		caracter nome, categoria='?'
		real altura, perc_A, perc_B, perc_C
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
		     perc_A = cont_A * 100.0 / N
		     perc_B = cont_B * 100.0 / N
		     perc_C = cont_C * 100.0 / N
		     escreva("A quantidade de jogadores que estão na categoria A é ", cont_A, " - ", perc_A,"% \n")
		     escreva("A quantidade de jogadores que estão na categoria B é ", cont_B, " - ", perc_B,"% \n")
		     escreva("A quantidade de jogadores que estão na categoria C é ", cont_C, " - ", perc_C,"% \n")
				 		
    	    
     }
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 794; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */