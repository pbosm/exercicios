/*
Um motorista monitorou vários tanques cheios de gasolina registrando a quilometragem dirigida e a
quantidade de combustível em litros utilizados para cada tanque cheio. Desenvolva um aplicativo Java que
receba como entrada os quilômetros dirigidos e os litros de gasolina consumidos (ambos como inteiros)
para cada tanque cheio. O programa deve calcular e exibir o consumo em quilômetros/litro para cada
tanque cheio e imprimir a quilometragem combinada e a soma total de litros de combustível consumidos
até esse ponto. Todos os cálculos de médias devem produzir resultados de ponto flutuante. Utilize um
diálogo de entrada para obter os dados do usuário.

 */
package listajava5;

import java.util.Scanner;
import javax.swing.JOptionPane;

/**
 *
 * @author Pablo
 */
public class ListaJava5 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        //Para cada tanque registrar a entrada da quantidade de combustível e a quilometragem dirigida
        boolean continuar = true;
        int kmTotal = 0, totalCombustivel = 0;
        while (continuar) {
            int qtdCombustivel = Integer.parseInt(
                    JOptionPane.showInputDialog("Informe a quantidade e combustível:"));
            int quilometragem = Integer.parseInt(
                    JOptionPane.showInputDialog("Informe a quilometragem rodada:"));
            kmTotal += quilometragem;
            totalCombustivel += qtdCombustivel;
            float consumoMedio = (float)quilometragem / (float)qtdCombustivel;
            JOptionPane.showMessageDialog(null,""
                    + "Para rodar " + quilometragem + " km" + " " 
                    + "foram necessários " + qtdCombustivel + " lts. \n"
                    + "O consumo médio foi de " + consumoMedio + " km/lt.");
            if (JOptionPane.showConfirmDialog(null, "Deseja continuar?") != 0) {
                continuar = false;
            } 
        }
        JOptionPane.showMessageDialog(null,""
                + "Resumo: \nForam rodados " + kmTotal + " km" + "\n" 
                + "Foram consumidos " + totalCombustivel + " lts. \n"
                + "O consumo médio foi de " + ((float)kmTotal / (float)totalCombustivel) + " km/lt.");
    }
    
}
    
