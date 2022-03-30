programa
{
	
	funcao inicio()
	{
	     	     		
		inteiro n1, contador=1, soma_n1=0, maior_n1=0, cont_par=0, cont_impar=0, menor_n1=10, N

		escreva("Quantos serão lidos? ")
		leia (N)
		
          enquanto (contador<= N)
          {          	
            
		 escreva("Digite um número: ")
		 leia(n1)	
		 
		 soma_n1 = soma_n1 + n1
		 se (n1 > maior_n1)
		 {
		  maior_n1 = n1
		 }
		 se(n1 < menor_n1)
		 {
		 	menor_n1 = n1
		 }
		 	 
		 se (n1 % 2 == 0) 
		{
		 escreva("O número é par", "\n")
		 cont_par = cont_par + 1	
		}
		
		senao 
		{
		 escreva("O número é impar", "\n")
		 cont_impar = cont_impar + 1
		}
           contador = contador + 1 
             
           se(n1 % 2 == 0)   
           {
           escreva("É multiplo de 10", "\n\n")
           }

           senao   
           {
           escreva("Não é multiplo de 10", "\n\n")
           }
  		 }

		escreva("Somatória de todos os números: ", soma_n1, "\n")
		escreva("Quantos números são pares: ", cont_par, "\n")
		escreva("Quantos números são ímpares: ", cont_impar, "\n")
		escreva("Maior número lido: ",maior_n1, "\n")
		escreva("Menor número lido: ",menor_n1, "\n")
	 }
}


/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 303; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */