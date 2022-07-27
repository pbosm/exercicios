/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package app;

import domain.Bairro;
import domain.Cidade;
import domain.Departamento;
import domain.Endereco;
import domain.Funcionario;
import java.util.Scanner;


/**
 *
 * @author mpisc
 */
public class MainApp {

    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        
        Departamento d1 = new Departamento();
        System.out.print("Digite o código do departamento: ");
        d1.setCodigo(entrada.nextInt());
        System.out.print("Digite o Local do departamento: ");
        d1.setLocal(entrada.next());
        
        Cidade cidade = new Cidade();
        System.out.print("Digite o nome da cidade: ");
        cidade.setNome(entrada.next());

        Bairro bairro = new Bairro();
        System.out.print("Digite o nome do bairro: ");
        bairro.setNome(entrada.next());      

        Endereco endereco1 = new Endereco();
        endereco1.setBairro(bairro);
        endereco1.setCidade(cidade);
        System.out.print("Digite o nome do Logradouro: ");
        endereco1.setLogradouro(entrada.next()); 
        System.out.print("Digite o número: ");
        endereco1.setNumero(entrada.nextInt());

        Funcionario f1 = new Funcionario();
        f1.setMatricula(100);
        System.out.print("Digite a matricula: ");
        f1.setMatricula(entrada.nextInt());
        f1.setNome("Mauro");
        System.out.print("Digite o nome: ");
        f1.setNome(entrada.next());
        f1.setDepartamento(d1);
        f1.setEndereco(endereco1);

        imprimir(f1);
        
    }

    public static void imprimir(Funcionario f) { //função
        System.out.println("");
        System.out.println("Dados do: " + f.getNome());
        System.out.println("Matricula...: " + f.getMatricula());
        System.out.println("Departamento: " + f.getDepartamento().getCodigo() + " - " + f.getDepartamento().getLocal());
        System.out.println("Endereco: " + f.getEndereco().getLogradouro() + " Cidade " + f.getEndereco().getCidade().getNome() + " Bairro " +f.getEndereco().getBairro().getNome());
    }

}
