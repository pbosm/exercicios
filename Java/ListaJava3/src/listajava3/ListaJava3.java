/*
Faça um programa que permite ler três valores para os lados de um triângulo, considerando lados como:
A, B e C. Verificar se os lados fornecidos formam um realmente um triângulo, e se for esta condição
verdadeira, deverá ser indicado qual tipo de triângulo foi formado: isósceles, escaleno ou equilátero.
Para se estabelecer este algoritmo é necessário, em primeiro lugar, saber o que realmente é um
triângulo. Se você não souber o que é um triângulo, consequentemente não conseguirá resolver o
problema. Triângulo é uma forma geométrica (polígono) composta por três lados, onde cada lado é menor
que a soma dos outros dois lados. Perceba que isto é uma regra (uma condição) e deverá ser considerada.
É um triângulo quando A < B + C, quando B < A + C e quando C < A + B.
Tendo certeza de que os valores informados para os três lados formam um triângulo, serão então
analisados os valores para se estabelecer qual tipo de triângulo será formado: isósceles, escaleno ou
equilátero.
Um triângulo é isóscele quando possui dois lados iguais e um diferente, isto é, A = B ou A = C ou
B = C.
É escaleno quando possui todos os lados diferentes, ou seja, A <> B e B <> C.
O triângulo é considerado equilátero quando possui todos os lados iguais, isto é, quando A = B e
B = C.
 */
package listajava3;

import java.util.Scanner;

/**
 *
 * @author Pablo
 */
public class ListaJava3 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner entrada = new Scanner(System.in);
        
        System.out.print("Informe o primeiro número: ");
        int A = entrada.nextInt();
        
        System.out.print("Informe o segundo número: ");
        int B = entrada.nextInt();
        
        System.out.print("Informe o terceiro número: ");
        int C = entrada.nextInt();
        
            if (A + B > C && B < A + C && C < A + B) { 
                System.out.println("Os três lados formam um triângulo");
            
            if (A == B && A == C) { //equilatero
                System.out.println("Equilatero"); }
            else if (A == B || A == C || B == C) { //isosceles
                System.out.println("Isósceles"); }
            else if (A != B && B != C) { //escaleno
                System.out.println("Escaleno");}
     
        }   else 
                System.out.println("Os três lados NÃO formam um triângulo");     
    }
}

    
