programa
{
	
	funcao inicio()
	{
	     	     		
		inteiro n1, contador=1, N

		escreva("Quantos serão lidos? ")
		leia (N)
		
          enquanto (contador<= N)
          {          	
            
		 escreva("Digite um número: ")
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
 * @POSICAO-CURSOR = 230; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */