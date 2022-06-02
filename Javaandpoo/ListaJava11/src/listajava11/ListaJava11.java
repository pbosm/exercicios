/*
Deseja-se fazer uma pesquisa a respeito do consumo mensal de energia elétrica em uma determinada
cidade. Para isso, são fornecidos os seguintes dados:
 Preço do KWh consumido;
 Número do consumidor;
 Quantidade de KWh consumidos durante o mês;
 Código do tipo de consumidor (residencial, comercial, industrial).
Fazer um programa que:
 Leia os dados descritos acima;
 Calcule:
 Para cada consumidor, o total a pagar;
 O maior consumo verificado;
 O menor consumo verificado;
 O total de consumo para cada um dos três tipos de consumidores;
 A média geral de consumo
 Escreva:
 Para cada consumidor, o seu número e o total a pagar
 O que foi calculado nos itens anteriores.

 */
package listajava11;

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
    
    int contador=1;
    float maiorconsumo=0, menorconsumo=999999, maiornumero=0, menornumero=999999, totalresidencial=0, totalcomercial=0, totalindustrial=0;
    char RCI;
    
    System.out.print("Quantas pesquisa serão feitas? ");
    int n = entrada.nextInt();
    
    while (contador <= n) {
    
    System.out.print("Número do consumidor? ");
    int numeroconsumidor = entrada.nextInt();
        
    System.out.print("Preço do KWh consumido? ");
    float kwh = entrada.nextFloat();
    
    System.out.print("Quantidade de KWh durante o mês? ");
    int quantidadekwh = entrada.nextInt();
    
    System.out.print("Código do tipo de consumidor (residencial(R), comercial(C), industrial(I)): ");
    RCI = entrada.next().charAt(0); 
    
    if(RCI == 'R') {
    float calculokwhmes = quantidadekwh * 8 * 30 / 1000; //FIQUEI EM DÚVIDA SE ERA PRA CALCULAR O GASTO NO QUESITO DINHEIRO OU O CONSUMO, FIZ COM O CONSUMO MAS CASO FOR PARA O GASTO EM DINHEIRO TAMBÉM SEI FAZER
    totalresidencial = totalresidencial + calculokwhmes;
    } 
    
    if(RCI == 'C'){
    float calculokwhmes = quantidadekwh * 8 * 30 / 1000;
    totalcomercial = totalcomercial + calculokwhmes;    
    }
    
    if(RCI == 'I') {
    float calculokwhmes = quantidadekwh * 8 * 30 / 1000;
    totalindustrial = totalindustrial + calculokwhmes;   
    }
    
    float calculokwhmes = quantidadekwh * 8 * 30 / 1000 * kwh;
    float consumo = quantidadekwh * 8 * 30 / 1000;
    
    //float mediaconsumo = consumo/n;
    
    if(consumo > maiorconsumo) {
        maiorconsumo = consumo;
        maiornumero = numeroconsumidor;
    }
    
    if(consumo < menorconsumo) {
        menorconsumo = consumo;
        menornumero = numeroconsumidor;
    }
    
    System.out.println("Total a pagar: " + calculokwhmes + " seu número: " + numeroconsumidor);
     
    contador = contador + 1; }
    
    System.out.println("\n");
    float media = (totalresidencial+totalcomercial+totalindustrial)/3; 
    System.out.println("Média geral de consumo: " + media);
    System.out.println("Maior consumo: " + maiorconsumo + " Número do consumidor " + maiornumero); 
    System.out.println("Menor consumo: " + menorconsumo + " Número do consumidor " + menornumero);
    System.out.println("Consumo total para tipos de consumidores residenciais: " + totalresidencial);
    System.out.println("Consumo total para tipos de consumidores comerciais: " + totalcomercial);
    System.out.println("Consumo total para tipos de consumidores industrias: " + totalindustrial);
    
  } 
    
}
