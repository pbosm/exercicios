/*
Um comerciante deseja fazer o levantamento do lucro das mercadorias que ele comercializa. Para isto,
mandou digitar cada mercadoria com o (nome), (preço de compra) (preço de venda das mercadorias). Fazer
um programa que:
• Determine e escreva quantas mercadorias proporcionam:
❖ Lucro menor 10 %;
❖ Lucro entre 10% e 20%;
❖ Lucro maior que 20%.
• Determine e escreva o valor total de compra e de venda de todas as mercadorias, assim como o
lucro total.
 */
package listajava8;

import java.util.Scanner;

/**
 *
 * @author Aluno
 */
public class ListaJava8 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
       
        char resposta='S';
        float somacompra = 0;  //contador iniciar no =0
        float somavenda = 0;  //contador iniciar no =0
        float somalucro = 0;  //contador iniciar no =0
        
            while (resposta == 'S') {
       
            System.out.print("Digite o nome da mercadoria: ");
            String mercadoria = entrada.next();
           
            System.out.print("Digite o preço de compra: ");          
            float precocompra = entrada.nextFloat();
            somacompra = somacompra + precocompra; //contador
           
            System.out.print("Digite o preço de venda das mercadorias: ");
            float precomercadoria = entrada.nextFloat();
            somavenda = somavenda + precomercadoria; //contador          
           
            float calculo1 = precomercadoria - precocompra;
            float calculo2 = calculo1/precomercadoria*100;
            somalucro = somalucro + calculo1;
                    
            //float porcentagem = calculo2*100;
            //System.out.println("Total compra" + somacompra);
            //System.out.println("Total venda" + somavenda);
            //System.out.println("Lucro " + calculo1);
            //System.out.println("Porcentagem: " + calculo2 + "%");
           
            if(calculo2 < 10) {
                System.out.println("Lucro menor de 10%");
            } else if (calculo2 >= 10 && calculo2 <= 20) {
                System.out.println("Lucro entre 10% e 20%");
            } else if (calculo2 > 20){
                System.out.println("Lucro maior de 20%");
            }
                         
            System.out.print("\n" + "Deseja continuar(S)(N)? "); 
            resposta = entrada.next().charAt(0);
            
            }   
            
            System.out.println("Lucro total: " + somalucro);    //imprimando somalucro totalizado após verificar loop "deseja continuar (S)(N)?"                                      
            System.out.println("Total compra: " + somacompra);  //imprimando somacompra totalizado após verificar loop "deseja continuar (S)(N)?" 
            System.out.println("Total venda: " + somavenda);    //imprimando somavenda totalizado após verificar loop "deseja continuar (S)(N)?" 
    }
   
} 
