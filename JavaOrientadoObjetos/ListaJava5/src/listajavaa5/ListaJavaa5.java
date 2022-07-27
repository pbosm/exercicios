/*
Fazer um programa usando a instrução condicional SWITCH..CASE para ler o código de um
determinado produto e mostrar a sua classificação. Utilize a seguinte tabela como referência:
 */
package listajavaa5;

import javax.swing.JOptionPane;

/**
 *
 * @author Pablo
 */
public class ListaJavaa5 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int opcao = 0;
       
        do {
            opcao = Integer.parseInt(JOptionPane.showInputDialog("Digite o código do produto para mostrar sua classificação\n"
                    + "(0) Fechar Programa"));

        switch (opcao) {
            case 1: JOptionPane.showInputDialog(null, "Alimento não-perecível");
            break;
            case 2,3,4: JOptionPane.showInputDialog(null, "Alimento perecível");
            break;
            case 5,6: JOptionPane.showInputDialog(null, "Vestuário");
            break;
            case 7: JOptionPane.showInputDialog(null, "Higiene pessoal");
            break;
            case 8,9,10,11,12,13,14,15: JOptionPane.showInputDialog(null, "Limpeza e Utensílios domésticos");
            break;
            case 0: JOptionPane.showInputDialog(null, "Aplicação encerrada!");
            break;
            default:JOptionPane.showInputDialog(null, "Inválido");
        }
       
        } while (opcao != 0 );
    }
    
}
