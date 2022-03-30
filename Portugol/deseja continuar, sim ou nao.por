programa
{
	
	funcao inicio()
	{
	     	     		
		inteiro n1
          caracter resposta='s'

          
          enquanto (resposta=='s')
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
 * @POSICAO-CURSOR = 409; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */