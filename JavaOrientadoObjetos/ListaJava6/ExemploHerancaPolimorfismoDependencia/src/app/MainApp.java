/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package app;

import domain.Conta;
import domain.ContaCorrente;
import domain.Poupanca;
import domain.Cliente;
import domain.ContaDetalhada;
import java.text.DecimalFormat;

/**
 *
 * @author Pablo
 */
public class MainApp {
    public static void main(String[] args) {
        
        Conta conta = new Conta();
        conta.setNumero(100);  
        conta.depositar(1000);
        
        ContaCorrente cc = new ContaCorrente();
        cc.setNumero(101);
        cc.depositar(4000);
        ((ContaCorrente)cc).setLimite(1000);
        ((ContaCorrente)cc).setTaxaJuros(0.8);
        cc.sacar(1000);
                       
        Poupanca cp = new Poupanca();
        cp.setNumero(102);
        cp.depositar(500);
        cp.setDiaAniversario(10);
                         
        imprimir(cc);
        imprimir(cp);
    }
    
    public static void imprimir(Conta conta) {
        ContaDetalhada cd = new ContaDetalhada();
        System.out.println(cd.imprimir(conta));
    }
}     

