/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package domain;

/**
 *
 * @author mpisc
 */
public class ContaEstudante extends ContaCorrente{
    private double taxaJuroReduzida;

    public double getTaxaJuroReduzida() {
        return taxaJuroReduzida;
    }

    public void setTaxaJuroReduzida(double taxaJuroReduzida) {
        this.taxaJuroReduzida = taxaJuroReduzida;
    }

    @Override
    public double getLimite() {
        return limite;
    }
    
    
}
