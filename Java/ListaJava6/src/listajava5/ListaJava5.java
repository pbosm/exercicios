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

/**
 *
 * @author Pablo
 */
public class ListaJava5 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner entrada = new Scanner(System.in);
        
        float media;
        
        System.out.print("Quilômetros dirigidos: ");
        int kg = entrada.nextInt();
        
        System.out.print("Litros de gasolina consumidos: ");    
        int litros = entrada.nextInt();
        
        media = kg/litros;
        System.out.println("Média do consumo: " + media);
                   
    }
    
}
