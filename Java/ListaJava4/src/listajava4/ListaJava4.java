/*
A Secretaria de Meio Ambiente que controla o índice de poluição mantém 3 grupos de indústrias que são
altamente poluentes do meio ambiente. O índice de poluição aceitável varia de 0 (zero) até 0,25. Se o
índice sobe para 0,3 as indústrias do 1º grupo são intimadas a suspenderem suas atividades, se o índice
crescer para 0,4 as indústrias do 1º e 2º grupo são intimadas a suspenderem suas atividades, se o índice
atingir 0,5 todos os grupos devem ser notificados a paralisarem suas atividades. Faça um programa que
leia o índice de poluição medido e emita a notificação adequada aos diferentes grupos de empresas.
 */
package listajava4;

import java.util.Scanner;

/**
 *
 * @author Pablo
 */
public class ListaJava4 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner entrada = new Scanner(System.in);
        
        System.out.print("Informe o indice: ");
        float indice = entrada.nextFloat();
        
          if (indice > 0 && indice <= 0.25F) {
            System.out.println("Índice de poluição aceitável ");
          }
          else if (indice <= 0.30F) {
            System.out.println("As indústrias do 1º grupo são intimadas a suspenderem suas atividades");
        } 
          else if (indice <= 0.40F) {
            System.out.println("As indústrias do 1º e 2º grupo são intimadas a suspenderem suas atividades");
        } 
          else if (indice <= 0.50F) {
            System.out.println("Todos os grupos devem ser notificados a paralisarem suas atividades");
        } 
                 
    }
    
}
