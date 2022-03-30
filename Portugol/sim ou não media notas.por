programa
{
	
	funcao inicio()
	{
	     caracter nome, resposta='s'
		real nota1, nota2, media

		enquanto (resposta=='s' ou resposta=='S')
		{
			escreva("Aluno : ") leia (nome)			
			escreva("Nota 1: ") leia (nota1)
			escreva("Nota 2: ") leia (nota2)
			media=(nota1+nota2)/2
			escreva("Media : ", media,"\n")
			se(media>=6)
			{
				escreva("Situação: APROVADO\n\n")
			}
			senao
			{
				escreva("Situação: REPROVADO\n\n")
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
 * @POSICAO-CURSOR = 32; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */