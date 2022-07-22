/*
Escreva um aplicativo em Java que lê três inteiros digitados pelo usuário e exibe a soma, a média, o
produto, o maior e o menor desses números em um diálogo de mensagem de informação. Nota: o cálculo
da média nesse exercício deve resultar em uma representação da média na forma de inteiro. Então, se a
soma dos valores é 7, a média será 2 e não 2,3333..
 */
package listajava1.pkg1;

import java.util.Scanner;

/**
 *
 * @author Pablo
 */
public class ListaJava11 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
                Scanner entrada = new Scanner(System.in);
        
        System.out.print("Informe o primeiro número: ");
        int n1 = entrada.nextInt();
        
        System.out.print("Informe o segundo número: ");
        int n2 = entrada.nextInt();
        
        System.out.print("Informe o terceiro número: ");
        int n3 = entrada.nextInt();
        
        int soma = n1+n2+n3;
        System.out.println("Soma: " + soma);
        
        int media = soma/3;
        System.out.println("Média: " + media);
        
        
        int Maior = (n1 > n2 && n1 > n3 ? n1 : (n2 > n3) ? n2 : n3);
        System.out.println("O maior número iniciado foi: " + Maior);
        
        int Menor = (n1 < n2 && n1 < n3 ? n1 : (n2 < n3) ? n2 : n3);
        System.out.println("O menor número iniciado foi: " + Menor);
        
        
        //FAZIA ASSIM CASO NÃO SOUBESSE DA FORMA QUE UTILIZEI 
        //if(n1 > n2 && n1 > n3){
        //    System.out.println("O maior número iniciado foi: " + n1);
        //} if (n2 > n1 && n2 > n3) {
        //    System.out.println("O maior número iniciado foi: " + n2);
        //} if (n3 > n1 && n3 > n2) {
        //    System.out.println("O maior número iniciado foi: " + n3);
        //}
        
        //if(n1 < n2 && n1 < n3){
        //    System.out.println("O menor número iniciado foi: " + n1);
        //} if (n2 < n1 && n2 < n3) {
        //    System.out.println("O menor número iniciado foi: " + n2);
        //} if (n3 < n1 && n3 < n2) {
        //    System.out.println("O menor número iniciado foi: " + n3);
        //}
        
    }
    
}


