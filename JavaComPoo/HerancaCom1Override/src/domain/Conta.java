/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package domain;

/**
 *
 * @author Pablo
 */
public class Conta {
    private int numero;
    private double saldo;

    public int getNumero() {
        return numero;
    }

    public void setNumero(int numero) {
        this.numero = numero;
    }

    public double getSaldo() {
        return saldo;
    }

//    public void setSaldo(double saldo) {
//        this.saldo = saldo;
//    }
    
    public boolean sacar(double quantia) { //METODO SACAR
        if (quantia <= saldo) {
            this.saldo -= quantia;
            return true;
        } else {
            return false;
        }
    }
    
    public void depositar(double quantia) { //METODO DEPOSITAR
        this.saldo += quantia;
    } 
        
    @Override
    public String toString() {
        return "Conta{" + "numero=" + numero + ", saldo=" + saldo + '}';
    }
    
}
