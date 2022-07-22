/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package app;

import domain.Conta;
import domain.ContaCorrente;
import domain.Poupanca;
import java.text.DecimalFormat;

/**
 *
 * @author Pablo
 */
public class MainApp {
    public static void main(String[] args) {
        
//        Conta conta = new Conta();
//        conta.setNumero(100);
//        conta.depositar(2000);
        
        ContaCorrente cc = new ContaCorrente();
        cc.setNumero(101);
        cc.depositar(2000);
        cc.setLimite(1000);
        cc.setTaxaJuros(0.8);
        System.out.println(cc);
        
        if (cc.sacar(500)) {
            System.out.println("Conta Corrente: Saque realizado com sucesso\n");
        } else {
            System.out.println("Conta Corrente: Saldo é insuficiente!\n");
        }          
        
        Poupanca cp = new Poupanca();
        cp.setNumero(102);
        cp.depositar(1000);
        cp.setDiaAniversario(10);
        System.out.println(cp);
        
        if (cp.sacar(1500)) {
            System.out.println("Conta poupança: Saque realizado com sucesso");
        } else {
            System.out.println("Conta poupança: Saldo é insuficiente!");
        }       
        
        imprimir(cc);
        imprimir(cp);
    }
    
    public static void imprimir(Conta conta) {
        DecimalFormat df = new DecimalFormat("0.00");
        if (conta instanceof ContaCorrente) {
            System.out.println("\nDados da conta corrente: " +
                "Numero: " + conta.getNumero() + 
                " Saldo: " + df.format(conta.getSaldo()) +
                " Taxa de juro: " + ((ContaCorrente)conta).getTaxaJuros() + 
                " Limite: " + ((ContaCorrente)conta).getLimite()
            );        
        } else {
            System.out.println("Dados da poupança: " +
                " Numero: " + conta.getNumero() + 
                " Saldo: " + df.format(conta.getSaldo()) +
                " Dia de aniversário: " + ((Poupanca)conta).getDiaAniversario() 
            );             
        }
    }
}    

