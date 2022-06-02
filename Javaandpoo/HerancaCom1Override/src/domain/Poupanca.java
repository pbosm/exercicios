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
public class Poupanca extends Conta { //Herança
    private int diaAniversario;

    public int getDiaAniversario() {
        return diaAniversario;
    }

    public void setDiaAniversario(int diaAniversario) {
        this.diaAniversario = diaAniversario;
    }
    
   @Override
    public String toString() {
        return super.toString() + "\nContaPoupanca{" + "diaAniversario=" + diaAniversario + '}';
    }    
}
