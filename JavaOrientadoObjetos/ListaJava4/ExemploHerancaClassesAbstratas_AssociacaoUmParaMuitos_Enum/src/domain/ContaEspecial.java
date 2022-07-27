/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package domain;

/**
 *
 * @author mpisc
 */
public class ContaEspecial extends ContaCorrente {
    private double limiteEmDobro;

    public double getLimiteEmDobro() {
        return limiteEmDobro;
    }

    public void setLimiteEmDobro(double limiteEmDobro) {
        this.limiteEmDobro = limiteEmDobro;
    }

    @Override
    public double getLimite() {
        return limite * 2;
    }
    
}
