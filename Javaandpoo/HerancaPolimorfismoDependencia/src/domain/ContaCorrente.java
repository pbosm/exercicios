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
public class ContaCorrente extends Conta { //HERANCA 
    private double limite;
    private double taxaJuros;

    public double getTaxaJuros() {
        return taxaJuros;
    }

    public void setTaxaJuros(double taxaJuros) {
        this.taxaJuros = taxaJuros;
    }

    public double getLimite() {
        return limite;
    }

    public void setLimite(double limite) {
        this.limite = limite;
    }
    
    @Override                                   //OVERRIDE COM METODO
    public boolean sacar(double quantia) {
        if (super.sacar(quantia)) {
            calcularTarifacao(quantia, 0.0001);
            return true;
        }
        return true;
    }
    
    @Override                                   //OVERRIDE COM METODO
    public void depositar(double quantia) {
        super.depositar(quantia);
        calcularTarifacao(quantia, 0.0001);
    }    

    @Override                                  //OVERRIDE COM METODO
    public String toString() {       
        return super.toString() + "\nContaCorrente{" + "limite=" + limite + ", taxaJuro=" + taxaJuros + '}' + "\n";
    }    
}
