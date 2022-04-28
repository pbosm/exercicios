/*
Fazer um programa que:
 Leia e escreva o nome e a altura das moças inscritas em um concurso de beleza. Para cada moça,
foi informado seu nome e sua altura. Para encerrar, será informada a palavra "FIM" no lugar do
nome.
 Calcule e escreva as duas maiores alturas e quantas moças a possuem.
 */
package listajava9;

import java.util.Scanner;

/**
 *
 * @author Pablo
 */
public class ListaJava9 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
    Scanner entrada = new Scanner(System.in);
    
    String troca = "FIM";
    int contador=1;
    float maiorAltura=0;
        
    System.out.print("Quantas canditadas? ");
    int n = entrada.nextInt();
    
    while (contador<= n)  {
        
    System.out.print("Qual o nome da canditada? ");
    String nome = entrada.next(); 
        
    System.out.print("Qual a altura da canditada? ");
    float altura = entrada.nextFloat();
    
    if (altura > maiorAltura) {
        maiorAltura = altura;
        //troca = nome;
    }
    
    System.out.println("\n");
    contador = contador + 1; }  
    
    System.out.println("A maior altura é da canditada: " + troca + " com " + maiorAltura);
    
    }
    
    
}
