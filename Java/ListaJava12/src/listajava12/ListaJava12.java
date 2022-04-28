/*
Escrever um programa que lê 3 valores (a, b e c) e calcula:
a) A área do trapézio que tem a como base maior, b como base menor e c como altura.
área dotrapézio=
(basemaior+basemenor)
2
∗altura
b) A área do quadrado que tem o valor da variável b como lado
área do quadrado=lado2
c) A área da superfície de um cubo que tem c por aresta
área do cubo=6∗aresta2

Disponha no programa um menu de opções que permita ao usuário escolher a operação desejada (1 –
Inserir os dados de entrada; 2 – Área do Trapézio; 3 – Área do Quadrado; 4 – Área da superfície do
cubo; 5 – Sair)

 */
package listajava12;

import java.util.Scanner;

/**
 *
 * @author Pablo
 */
public class ListaJava12 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
            Scanner entrada = new Scanner(System.in);   
            char opcao;
                 
            System.out.println("MENU");
            System.out.println("1- Área do trapézio");
            System.out.println("2- Área do quadrado");
            System.out.println("3- Área da superfície do cubo");
            System.out.println("4- Sair");
            
            System.out.print("\nInforme o primeiro número: ");
            int A = entrada.nextInt();
        
            System.out.print("Informe o segundo número: ");
            int B = entrada.nextInt();

            System.out.print("Informe o terceiro número: ");
            int C = entrada.nextInt();
            
            float trapezio = calcularTrapezio(A, B, C);//(A + B)* C /2; 
            
            float quadrado = calcularQuadrado(A, B, C); //B*2;
            
            float superficie = calcularCubo(A, B, C);//6*C*2;
            
            System.out.print("\nDigite sua opção: ");
            opcao = entrada.next().charAt(0);
            
            if ( opcao == '1') { 
            float calculotrapezio = calcularTrapezio(A, B, C);
            System.out.println("Área do trapézio é: "+calculotrapezio);          
            } if ( opcao == '2') {
            float calculoQuadrado = calcularQuadrado(A, B, C);
            System.out.println("Área do quadrado é: "+calculoQuadrado);  
            } if (opcao == '3') {
            float calculoCubo = calcularCubo(A, B, C);
            System.out.println("Área da superfície do cubo é: "+calculoCubo);     
            } if (opcao == '4') {
            System.out.println("Aplicação encerrada!");    
            }
            
            }
    
       public static Float calcularTrapezio(int A, int B, int C) {  //CONCLUSÃO DA FUNÇÃO, verificar se é maior ou menor de idade
       float calculotrapezio = (A + B)* C /2;
       return calculotrapezio;
       }
       public static Float calcularQuadrado(int A, int B, int C) {  //CONCLUSÃO DA FUNÇÃO, verificar se é maior ou menor de idade
       float calculoquadrado = B*2;
       return calculoquadrado;
       }
       public static Float calcularCubo(int A, int B, int C) {  //CONCLUSÃO DA FUNÇÃO, verificar se é maior ou menor de idade
       float calculocubo = 6*C*2;
       return calculocubo;
       }
       
}
 

