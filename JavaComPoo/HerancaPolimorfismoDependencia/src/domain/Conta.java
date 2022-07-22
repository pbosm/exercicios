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
public class Conta extends Object { //OBJETO CRIADO
    private int numero;
    private double saldo;
    private Cliente Cliente;

    public int getNumero() {
        return numero;
    }

    public void setNumero(int numero) {
        this.numero = numero;
    }

    public double getSaldo() {
        return saldo;
    }

    public void setSaldo(double saldo) {
        this.saldo = saldo;
    }

    public Cliente getCliente() {
        return Cliente;
    }

    public void setCliente(Cliente Cliente) {
        this.Cliente = Cliente;
    }
    
    public boolean sacar(double quantia) {  //METODO SACAR
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
 
    public void calcularTarifacao(double quantia, double tx) { //METODO CALCULAR TARIFACAO
        double valor = quantia * tx;
        this.saldo -= valor;
    }     

    @Override                              //OVERRIDE
    public String toString() {
        return "Conta{" + "numero=" + numero + ", saldo=" + saldo + '}';
    }    
}
