/*
Uma pequena companhia aérea acabou de comprar um computador para seu novo sistema
automatizado de reservas. Foi solicitado que você programasse o novo sistema. Você escreverá um
programa para atribuir assentos em cada vôo do único avião da companhia (capacidade: 10 assentos).
Seu programa deve exibir o seguinte menu de alternativas:
Pressione 1 para “Primeira Classe”
Pressione 2 para “Classe Executiva”
Se a pessoa digitar 1, seu programa deve atribuir um assento na Primeira Classe (assentos 1-5). Se a
pessoa digitar 2, seu programa deve atribuir um assento na Classe Executiva (assentos 6-10). Seu
programa, então, deve imprimir um ticket de embarque indicando o número de assento da pessoa e se
ele está na Primeira Classe ou Classe Executiva do avião.
Utilize um array unidimensional de tamanho 10 para representar o gráfico de assentos do avião. Inicialize
todos os elementos do array com 0 para indicar que todos os assentos estão vazios. À medida que cada
assento é atribuído, configure os elementos correspondentes do array com 1 para indicar que o assento
não está mais disponível.
Naturalmente, seu programa nunca deve atribuir um assento que já foi atribuído. Quando a Primeira
Classe estiver lotada, seu programa deve solicitar à pessoa se é aceitável ser colocado na Classe
Executiva (e vice-versa). Se for, faça a atribuição apropriada de assento. Se não for, imprima a
mensagem “Aguarde o próximo vôo!!!”.
 */
package passageiroassento1.pkg0;

import java.util.Scanner;

/**
 *
 * @author Pablo
 */
public class PassageiroAssento10 {

    /**
     * @param args the command line arguments
     */

    private static int[] assentos = new int[10];
    private static Scanner entrada = new Scanner(System.in);

    public static void main(String[] args) {
        int opcao = 0;
        do {

            System.out.println("1 - Primeira classe");
            System.out.println("2 - Classe executiva");
            System.out.println("3 - Listar situação dos assentos");
            System.out.println("4 - Inicializar voo");
            System.out.println("0 - sair");
            System.out.print("Opcao: ");
            opcao = entrada.nextInt();
            switch (opcao) {
                case 1:
                    venderPassagemPrimeiraClasse();
                    break;
                case 2:
                    venderPassagemClasseExecutiva();
                    break;
                case 3:
                    imprimir();
                    break;
                case 4:
                    inicializarAssentos();
                    break;
                case 0:
                    System.out.println("O sistema de vendas de passagens será finalizado!");
                default:
                    System.out.println("Opcao inválida!!!");
            }
        } while (opcao != 0);

    }

    private static void venderPassagemClasseExecutiva() {
        int assento = verificarDisponibilidadeClasseExecutiva();

        if (assento == -1) {
            System.out.println("A classe executiva está lotada!");
            int assentoDisponivelPC = verificarDisponibilidadePrimeiraClasse();
            if (assentoDisponivelPC == -1) {
                System.out.println("O voo está lotado, aguarde o próximo!!!");
            } else {
                System.out.println("Gostaria de ocupar um assento na primeira classe? (S/N): ");
                char opcao = entrada.next().charAt(0);
                if (opcao == 's' || opcao == 'S') {
                    assentos[assentoDisponivelPC] = 1;
                    imprimirTicket(assentoDisponivelPC, "primeira Classe");
                }
            }
        } else {
            assentos[assento] = 1;
            imprimirTicket(assento, "Classe Executiva");
        }
    }

    private static int verificarDisponibilidadeClasseExecutiva() {
        for (int i = 5; i < 10; i++) {
            if (assentos[i] == 0) {
                return i;
            }
        }
        return -1;
    }

    private static void venderPassagemPrimeiraClasse() {
        int assento = verificarDisponibilidadePrimeiraClasse();

        if (assento == -1) {
            System.out.println("A primeira classe está lotada!");
            int assentoDisponivelCE = verificarDisponibilidadeClasseExecutiva();
            if (assentoDisponivelCE == -1) {
                System.out.println("O voo está lotado, aguarde o próximo voo!!!");
            } else {
                System.out.println("Gostaria de ocupar um assento na classe executiva? (S/N): ");
                char opcao = entrada.next().charAt(0);
                if (opcao == 's' || opcao == 'S') {
                    assentos[assentoDisponivelCE] = 1;
                    imprimirTicket(assentoDisponivelCE, "Classe Executiva");
                }
            }
        } else {
            assentos[assento] = 1;
            imprimirTicket(assento, "Primeira Classe");
        }
    }

    private static int verificarDisponibilidadePrimeiraClasse() {
        for (int i = 0; i < 5; i++) {
            if (assentos[i] == 0) {
                return i;
            }
        }
        return -1;
    }

    private static void imprimir() {
        for (int i = 0; i < assentos.length; i++) {
            System.out.println("assento" + (i + 1) + ":"
                    + (assentos[i] == 0 ? "Disponível" : " Ocupado"));
        }
    }

    private static void inicializarAssentos() {
        for (int i = 0; i < assentos.length; i++) {
            assentos[i] = 0;
        }
    }

    private static void imprimirTicket(int assento, String classe) {
        System.out.println("você reservou o assento " + (assento + 1)
                + " da " + classe);
    }
}
