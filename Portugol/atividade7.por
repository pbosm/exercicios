programa
/*ler 5 números inteiros e para cada número informar se ele é par ou ímpar. Obs.:- Utilize a estrutura de repetição enquanto; e- Considere o 0 (zero) como par.*/

{
	
	funcao inicio()
	{
	     	     		
		inteiro n1, contador=1
          enquanto (contador<=5)
          {          	
            
		 escreva("Digite um número:: ")
		 leia(n1)		 
		 se (n1 % 2 == 0) 
		{
		 escreva("O número é par", "\n\n")	
		}

		senao 
		{
		 escreva("O número é impar", "\n\n")
		}
           contador = contador + 1          
          }
          
		
	}
}		
		

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 240; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */