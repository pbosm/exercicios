/*
Desenvolva um aplicativo Java que determine o salário bruto de cada um de n empregados. A empresa
paga “hora normal” pelas primeiras 40 horas trabalhadas por cada empregado e “horas extras” com 50%
de gratificação para todas as horas trabalhadas além de 40 horas. Você recebe uma relação dos
empregados da empresa, o número de horas trabalhadas por cada empregado na última semana e o
salário-hora de cada empregado. Seu programa deve ler essas informações para cada empregado e deve
determinar e exibir o salário bruto do empregado. Utilize diálogo para entrada dos dados. O programa deve
finalizar quando todos os cálculos forem realizados, mostrando o total pago em salário para todos os
empregados
 */
package listajava7;

import java.util.Scanner;

/**
 *
 * @author Pablo
 */
public class ListaJava7 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        
        int contador=1;
        
        System.out.print("Quantos empregados? ");
        int n = entrada.nextInt();
        System.out.println("\n");
        
        while (contador<= n)  {
        System.out.print("Quanto o funcionario recebe? ");
        int salario = entrada.nextInt(); 
        
        System.out.print("Quantas horas o funcionario fez? ");
        int horatrabalho = entrada.nextInt();
        
        if(horatrabalho <= 40) {
          int salariohora  = salario / horatrabalho;  
          
          System.out.println("Funcionario fez " + horatrabalho + " horas, carga horaria normal");
          System.out.println("Seu salário-hora é: " + salariohora);
          System.out.println("Salario bruto: " + salario);  
          
        } else if (horatrabalho > 40) {
          int   calculosalario = horatrabalho - 40;
          float salariohora    = salario / horatrabalho;
          float horaextra      = (salariohora / 2 + salariohora)* calculosalario;
          float salariobruto   = (salariohora * horatrabalho) + horaextra;
          
          System.out.println("Funcionario fez " + calculosalario + " horas extra"); 
          System.out.println("Totalizando: " + horatrabalho + " horas semanais");
          System.out.println("Seu salário-hora é: " + salariohora);
          System.out.println("Ganhos pela hora extra: " + horaextra);
          System.out.println("Salario bruto: " + salariobruto);
          System.out.println("\n");
          }
                                
        contador = contador + 1;}
        
    }
}
