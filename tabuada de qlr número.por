programa
{
	
	funcao inicio()
	{
		inteiro n1, n2
		caracter resposta='s'


		enquanto (resposta=='s')

		{
 	    
		escreva("Qual séra o número? " )
		leia(n1)
			
 	     para (n2 = 0;n2<=10;n2++)
 	     {
 	    	escreva(n1, " * ", n2, " = ", n1*n2, "\n")
 	     }
		escreva("Deseja continuar (S/N)? ")
		leia(resposta) 
		}
	}
}
	
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 336; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */