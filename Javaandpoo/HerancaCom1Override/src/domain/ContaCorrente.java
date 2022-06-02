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
public class ContaCorrente extends Conta { //HERANÇA 
    private double limite;
    private double taxaJuros;

    public double getLimite() {
        return limite;
    }

    public void setLimite(double limite) {
        this.limite = limite;
    }

    public double getTaxaJuros() {
        return taxaJuros;
    }

    public void setTaxaJuros(double taxaJuros) {
        this.taxaJuros = taxaJuros;
    }
    
    @Override               //OVER RIDE 
    public String toString() {       
        return super.toString() + "\nContaCorrente{" + "limite=" + limite + ", taxaJuro=" + taxaJuros + '}';
    }   
}
