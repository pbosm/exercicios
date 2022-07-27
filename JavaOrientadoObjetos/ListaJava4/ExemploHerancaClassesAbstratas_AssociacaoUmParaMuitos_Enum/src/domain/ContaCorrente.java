/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package domain;

/**
 *
 * @author mpisc
 */
public class ContaCorrente extends Conta{
    protected double limite;
    private double taxaJuro;

    public double getLimite() {
        return limite;
    }

    public void setLimite(double limite) {
        this.limite = limite;
    }

    public double getTaxaJuro() {
        return taxaJuro;
    }

    public void setTaxaJuro(double taxaJuro) {
        this.taxaJuro = taxaJuro;
    }
    
    @Override
    public boolean sacar(double quantia) {
        if (super.sacar(quantia)) {
            calcularTarifacao(quantia, 0.0001);
            return true;
        }
        return true;
    }
    
    @Override
    public void depositar(double quantia) {
        super.depositar(quantia);
        calcularTarifacao(quantia, 0.0001);
    }    

    @Override
    public String toString() {
        
        return super.toString() + "\nContaCorrente{" + "limite=" + limite + ", taxaJuro=" + taxaJuro + '}';
    }
    
    
}
