/* 
 * Ler o nome do aluno e suas 2 notas.
 * Calcular e mostrar a média do aluno.
 */



programa
{ 
	
	funcao inicio()
	{
		cadeia nome
		real n1, n2, media
		escreva ("Qual nome do aluno?")
		leia (nome)
		escreva ("nota 1: ")
		leia (n1)
		escreva ("nota 2: ")
		leia (n2)
		media = (n1+n2)/2
		escreva ("A média do aluno é ", media)
		
		
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 342; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */