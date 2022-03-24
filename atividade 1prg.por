programa
{
	
	funcao inicio()
	{
		real Custo, Imposto, Lucro, Valorend
		escreva ("Qual o custo de fábrica do carro? ")
		leia (Custo)
		escreva ("Quantos % é o imposto ")
		leia (Imposto)
		Imposto = (Custo*Imposto/100)
		escreva ("O custo do imposto é ", Imposto, "\n")
		escreva ("O lucro do distribuidor é quantos %?")
		leia (Lucro)
		Lucro = (Custo*Lucro/100)
		escreva ("O Lucro é ", Lucro, "\n")
		Valorend = (Custo+Imposto+Lucro)
		escreva ("O Valor ao consumidor é ", Valorend)
	
		
		
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 495; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */