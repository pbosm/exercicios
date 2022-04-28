/*
Escreva um aplicativo em Java que lê uma entrada do usuário definindo o raio de um círculo e que imprime
o diâmetro, a circunferência e a área do círculo. Utilize o valor constante 3,14159 para  (PI). Nota: você
também pode utilizar a constante Math.PI predefinida para o valor de . Essa constante é mais precisa
que o valor 3,14159. A classe Math é definida no pacote java.lang. Utilize as seguintes fórmulas (onde r
é o raio): diâmetro = 2 * r, circunferência = 2 * r, área =  * r2.
 */
package listajava2;

import java.util.Scanner;

/**
 *
 * @author Pablo
 */
public class ListaJava2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner entrada = new Scanner(System.in);
        
        double area,raio;
       // float area;
        
        System.out.print("Informe o raio: ");
        raio = entrada.nextDouble();
        
        area = 2 * Math.PI * raio;
        System.out.println("A area é: " + area);
    }
    
}
