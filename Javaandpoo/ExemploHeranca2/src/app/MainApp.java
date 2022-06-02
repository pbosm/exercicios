/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package app;

import domain.Conta;
import domain.ContaCorrente;
import domain.Poupanca;

/**
 *
 * @author Pablo
 */
public class MainApp {
    public static void main(String[] args) {
        
//        Conta conta = new Conta();
//        conta.setNumero(100);
//        conta.setSaldo(2000);
        
        ContaCorrente cc = new ContaCorrente();
        cc.setNumero(101);
        cc.setSaldo(4000);
        cc.setLimite(1000);
        cc.setTaxaJuro(0.8);
        
        Poupanca cp = new Poupanca();
        cp.setNumero(999);
        cp.setSaldo(1000);
        cp.setDiaAniversario(10);
                  
        imprimir(cc);
        imprimir(cp);
    }
    
    public static void imprimir(Conta conta) {
        if (conta instanceof ContaCorrente) {
            System.out.println("Dados da conta corrente: " +
                "Numero: " + conta.getNumero() + 
                " Saldo: " + conta.getSaldo() +
                " Taxa de juro: " + ((ContaCorrente)conta).getTaxaJuro() + 
                " Limite: " + ((ContaCorrente)conta).getLimite()
            );        
        } else {
            System.out.println("Dados da poupança: " +
                "Numero: " + conta.getNumero() + 
                " Saldo: " + conta.getSaldo() +
                " Dia de aniversário: " + ((Poupanca)conta).getDiaAniversario() 
            );             
        }
    }
}    

