/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package app;

import domain.Bairro;
import domain.Cidade;
import domain.Departamento;
import domain.Endereco;
import domain.Funcionario;


/**
 *
 * @author mpisc
 */
public class MainApp {

    public static void main(String[] args) {
        
        Departamento d1 = new Departamento();
        d1.setCodigo(1);
        d1.setLocal("Bloco central");
        d1.setNome("Vendas");

        Departamento d2 = new Departamento();
        d2.setCodigo(2);
        d2.setLocal("Bloco A");
        d2.setNome("Almoxarifado");

        Cidade cidade = new Cidade();
        cidade.setNome("Florianopolis");
        cidade.setUf("SC");

        Bairro bairro = new Bairro();
        bairro.setNome("Trindade");      

        Endereco endereco1 = new Endereco();
        endereco1.setBairro(bairro);
        endereco1.setCidade(cidade);
        endereco1.setLogradouro("Rua palmeiras");
        endereco1.setNumero(66);
        endereco1.setComplemento("Casa");

        Endereco endereco2 = new Endereco();
        endereco2.setBairro(bairro);
        endereco2.setCidade(cidade);
        endereco2.setLogradouro("Rua Acácia");
        endereco2.setNumero(876);
        endereco2.setComplemento("Apto 999");

        Funcionario f1 = new Funcionario();
        f1.setMatricula(100);
        f1.setNome("Mauro");
        f1.setSalario(2000.0F);
        f1.setDepartamento(d2);
        f1.setEndereco(endereco1);
        f1.setData("14/05/2050");

        Funcionario f2 = new Funcionario();
        f2.setMatricula(101);
        f2.setNome("Maiara");
        f2.setSalario(-2500.0F);
        f2.setDepartamento(d1);
        f2.setEndereco(endereco2);
        f2.setData("30/10/1965");

        imprimir(f1);
        imprimir(f2);
        
//        System.out.println("Dados do " + f1.getNome());
//        System.out.println("Matricula...: " + f1.getMatricula());
//        System.out.println("Salario.....: " + f1.getSalario());
//        System.out.println("Departamento: " + f1.getDepartamento().getNome() + " - " + f1.getDepartamento().getLocal());
//
//        System.out.println("Dados do " + f2.getNome());
//        System.out.println("Matricula...: " + f2.getMatricula());
//        System.out.println("Salario.....: " + f2.getSalario());
//        System.out.println("Departamento: " + f2.getDepartamento().getNome() + " - " + f2.getDepartamento().getLocal());

    }

    public static void imprimir(Funcionario f) { //função
        System.out.println("");
        System.out.println("Dados do " + f.getNome());
        System.out.println("Matricula...: " + f.getMatricula());
        System.out.println("Data nascimento...: " + f.getData());
        System.out.println("Salario.....: " + f.getSalario());
        System.out.println("Departamento: " + f.getDepartamento().getNome() + " - " + f.getDepartamento().getLocal());
        System.out.println("Endereco: " + f.getEndereco().getLogradouro() + " Cidade " + f.getEndereco().getCidade().getNome() + " Bairro " +f.getEndereco().getBairro().getNome());
    }

}
