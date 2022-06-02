/*
Escreva um programa que solicita o total gasto pelo cliente de uma loja, imprime as opções de
pagamento, solicita a opção desejada e imprime o valor total das parcelas (quando houverem).
Opções:
1. a vista com 10% de desconto
2. em duas vezes (preço da etiqueta)
3. de 3 até 10 vezes com 3% de juros ao mês (somente para compras acima de R$
100,00).
OBS: Fazer um método que imprime o menu de opções e solicita a opção desejada. Este método
deverá retornar a opção escolhida e, a partir dela, o programa principal deve verifica-la (por meio de uma
instrução switch) para então ativar o método correspondente (um método para cada opção) para
calcular o valor do produto e parcelas.
 */
package listajava14;

import java.util.Scanner;
import javax.swing.JOptionPane;



/**
 *
 * @author Pablo
 */
public class ListaJava14 {  

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        Scanner entrada = new Scanner(System.in);

        System.out.print("Total gasto pelo cliente: ");
        float total = entrada.nextFloat();

        imprimePagamento(total);
        }

        public static void imprimePagamento (float total){
            
            float desconto;
            float valorComDesconto;
            float valorParcelas;
            float juros;
            float valorComJuros;
            
            int opcao = 0;
            
            do {
            opcao = Integer.parseInt(JOptionPane.showInputDialog("Escolha a forma de pagamento \n"
            + "1) A vista\n"
            + "2) 2x\n"
            + "3) 3 a 10x com 3% de juros\n"
            + "0) Sair"));
            switch (opcao) {
            case 1: desconto = (total * 10/100);
            valorComDesconto = total - desconto;
            JOptionPane.showMessageDialog(null,
            "Valor total: " + valorComDesconto);
            break;
            case 2: valorParcelas = total/2;
            JOptionPane.showMessageDialog(null,
            "Valor das parcelas: " + valorParcelas);
            break;
            case 3: juros = total * 3/100;
            valorComJuros = total + juros;
            if (total > 100.0) {
            JOptionPane.showMessageDialog(null,
            "Valor das parcelas: "+ valorComJuros);
            } else {
            JOptionPane.showMessageDialog(null,"Apenas para compras acima de 100,00 reais");
            }
            break;

            default: JOptionPane.showMessageDialog(null,
            "Aplicação encerrada");
            }
            
            } while (opcao != 0);
            
     }
}
               
