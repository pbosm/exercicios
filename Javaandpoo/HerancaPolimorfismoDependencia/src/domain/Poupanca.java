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
public class Poupanca extends Conta { //HERANCA
    private int diaAniversario;

    public int getDiaAniversario() {
        return diaAniversario;
    }

    public void setDiaAniversario(int diaAniversario) {
        this.diaAniversario = diaAniversario;
    }
    
    @Override                                   //OVERRIDE COM METODO
    public boolean sacar(double quantia) {
        if (super.sacar(quantia)) {
            calcularTarifacao(quantia, 0.0002);
            return true;
        }
        return true;
    }
    
    @Override                                   //OVERRIDE COM METODO
    public void depositar(double quantia) {
        super.depositar(quantia);
        calcularTarifacao(quantia, 0.0002);
    }

    @Override                                   //OVERRIDE COM METODO
    public String toString() {
        return super.toString() + "\nContaPoupanca{" + "diaAniversario=" + diaAniversario + '}';
    }    
}
