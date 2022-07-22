/*
Uma Universidade deseja fazer um levantamento a respeito de seu concurso vestibular. Para cada curso
é fornecido o seguinte conjunto de valores:
 Um código do curso;
 Número de vagas;
 Número de candidatos do sexo masculino;
 Número de candidatos do sexo feminino.
Fazer um programa que:
 Calcule e escreva, para cada curso, o número de candidatos por vaga e a percentagem de
candidatos do sexo feminino (escreva também o código correspondente do curso);
 Determine o maior número de candidatos por vaga e escreva esse número juntamente com o código
do curso correspondente (supor que não haja empate);
 Calcule e escreva o total de candidatos.

 */
package listajavaa10;

import java.util.Scanner;

/**
 *
 * @author Pablo
 */
public class ListaJavaa10 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
    Scanner entrada = new Scanner(System.in);
    
    char resposta='S';
    float maiorporvaga=0, totalcandidatos=0;
    int maiorcodigo=0;
    
    while (resposta == 'S') {
        
    System.out.print("Digite o código do curso: ");
    int codigocurso = entrada.nextInt();
        
    System.out.print("Número de vagas: ");    
    int vagas = entrada.nextInt();
            
    System.out.print("Número de candidatos do sexo masculino: ");    
    int sexomasc = entrada.nextInt();
            
    System.out.print("Número de candidatos do sexo feminino: ");    
    int sexofem = entrada.nextInt();
    
    float somacandidatos = sexomasc+sexofem;
    float porvaga = somacandidatos/vagas;   
    float porcentagemfem = sexofem / somacandidatos * 100;
    
    System.out.println("Código do curso: " + codigocurso); 
    System.out.println("Número de candidatos por vaga: " + porvaga); 
    System.out.println("% de candidatos do sexo feminino: " + porcentagemfem); 
    
    if (porvaga > maiorporvaga) {
        maiorporvaga = porvaga;
        maiorcodigo = codigocurso;
    }
    
    totalcandidatos = totalcandidatos + somacandidatos;
    System.out.print("\n" + "Deseja continuar(S)(N)? "); 
    resposta = entrada.next().charAt(0);
    
    }
    
    System.out.println("Maior número de canditados por vaga é: " + maiorporvaga + " do curso: " + maiorcodigo); 
    System.out.println("Total de candidatos: " + totalcandidatos); 
    
  }
}

