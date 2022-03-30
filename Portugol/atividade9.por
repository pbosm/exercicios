/*Faça um programa para ler o nome e as duas notas de N alunos, onde N deve ser
lido no início do programa.
Para cada aluno mostre a sua média e a situação (Aprovado/Reprovado). */
programa
{
	
	funcao inicio()
	{
		cadeia nome, maior_nome="", menor_nome=""
		real nota1,nota2,media, perc_apro, perc_repro, soma_media=0, maior_media=0, menor_media=10
		inteiro contador=1, N, cont_apro=0, cont_repro=0

		escreva("Quantos alunos serão lidos? ")
		leia(N)

		enquanto (contador <= N)
		{
			escreva("Aluno : ")	leia(nome)
			escreva("Nota 1: ") leia(nota1)
			escreva("Nota 2: ") leia(nota2)
			media=(nota1+nota2)/2
			
			soma_media = soma_media + media
               se (media > maior_media)
               {
               	maior_media = media
               	maior_nome = nome
               }
               se (media < menor_media)
               {
               	menor_media = media	
               	menor_nome = nome
               }
	
			escreva("Média : ",media,"\n")			
			se (media>=6)
			{
				escreva("Situação: APROVADO\n\n")
				cont_apro++
			}
			senao
			{
				escreva("Situação: REPROVADO\n\n")
				cont_repro++
			}
			contador = contador + 1
		}
		    perc_apro = cont_apro * 100.0 / N
		    perc_repro = cont_repro * 100.0 / N
		    escreva("A quantidade de alunos que foram aprovados foi  ", cont_apro, " - ", perc_apro,"% \n")
		    escreva("A quantidade de alunos que foram reprovados foi  ", cont_repro, " - ", perc_repro,"% \n")
		    media = soma_media / N
		    escreva("A media geral da turma é: ", media, "\n")
		    escreva("Maior media da turma é: ",maior_media," aluno que a obteve: ", maior_nome, "\n")
		    escreva("Menor media da turma é: ",menor_media," aluno que a obteve: ", menor_nome, "\n")
		    
		    
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 1724; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */