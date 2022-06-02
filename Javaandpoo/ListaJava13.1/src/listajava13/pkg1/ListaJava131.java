/*
13. Um estacionamento cobra uma taxa mínima de R$ 2,00 para estacionar por até três horas. Um adicional
de R$ 0,50 por hora não necessariamente inteira é cobrado após as três primeiras horas. A taxa máxima
para qualquer dado período de 24 horas é R$ 10,00. Pressuponha que nenhum carro fica estacionado
por mais de 24 horas por vez. Escreva um programa que calcula e exibe a taxa de estacionamento para
cada cliente. O programa deve exibir a cobrança para o cliente atual e calcular e exibir o total dos
recibos. O programa deve utilizar o método calcularTaxa para determinar a taxa para cada cliente.
 */
package listajava13.pkg1;

import java.util.Scanner;

/**
 *
 * @author Pablo
 */
public class ListaJava131 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
    Scanner entrada = new Scanner(System.in);
    int contador=1;
    float somarecibo = 0;
    
    System.out.print("Quantos clientes foram atendidos? ");
    int n = entrada.nextInt();
    
    while (contador <= n) {  //taxa minima 2,00 para ficar 3horas | apos 3horas + 0,50 por hora | 24hrs = 10,00  
        
    System.out.print("Quantas horas ficou utilizando o estacionamento? ");  
    float horas = entrada.nextFloat();
    
    System.out.print("Nome do carro? "); 
    String carro = entrada.next();
    
    calcularTaxa(horas, carro);
    
    contador = contador + 1; }
  
    }   
    
    public static void calcularTaxa(float horas, String carro) { 
    if (horas <= 3) {
    double taxa = 2.00;
    System.out.println("Taxa do cliente foi: " + taxa + " do Carro: " + carro);
    }
    
    if (horas >= 3 && horas < 24) {
    float calculo = horas - 3;
    double taxa = (0.50 * calculo) + 2.00; 
    System.out.println("Taxa do cliente foi: " + taxa + " do Carro: " + carro);
    }
    
    if (horas > 24) {
    double taxa = 10.00;
    System.out.println("Taxa do cliente foi: " + taxa + " do Carro: " + carro);
    }
    
    return ;}
}
