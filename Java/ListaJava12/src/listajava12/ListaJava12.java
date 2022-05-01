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
import javax.swing.JOptionPane;

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
            int A=0, B=0, C=0;
            int opcao = 1;
                 
            while (opcao !=0) {
            
            opcao = Integer.parseInt(JOptionPane.showInputDialog("Escolha qual forma para continuar \n"
            + "1) Informar Entrada\n"
            + "2) Área do trapézio\n"
            + "3) Área do quadrado\n"
            + "4) Área da superfície do cubo\n"
            + "0) Sair"));

            switch (opcao) {
                
                case 1: System.out.println("Informe o 1 número: ");
                A = entrada.nextInt();
                System.out.println("Informe o 2 número: ");
                B = entrada.nextInt();
                System.out.println("Informe o 3 número: ");
                C = entrada.nextInt();
                break;
            
                case 2:float calculotrapezio = calcularTrapezio(A, B, C);
                       JOptionPane.showMessageDialog(null,"Área do trapézio é: " + calculotrapezio);
                break;
                
                case 3:float calculoQuadrado = calcularQuadrado(A, B, C);
                       JOptionPane.showMessageDialog(null,"Área do quadrado é: " + calculoQuadrado);
                break;
                
                case 4:float calculoCubo = calcularCubo(A, B, C);
                       JOptionPane.showMessageDialog(null,"Área da superfície do cubo é: " + calculoCubo);
                break;                     
                
                case 0: JOptionPane.showMessageDialog(null,"Aplicação encerrada!");
                break;  
                
                default: JOptionPane.showMessageDialog(null,"Opção invalida"); 
                       
            float trapezio = calcularTrapezio(A, B, C);//(A + B)* C /2; 
            
            float quadrado = calcularQuadrado(A, B, C); //B*2;
            
            float superficie = calcularCubo(A, B, C);//6*C*2;
            
            } 
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
 

