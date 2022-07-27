/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Enum.java to edit this template
 */
package domain;

/**
 *
 * @author mpisc
 */
public enum EStatusCartao {
    //BLOQUEADO, DESBLOQUEADO, CANCELADO;
    
    BLOQUEADO("Cartão Bloqueado"), DESBLOQUEADO("Cartão desbloqueado"), 
    CANCELADO("Cartão Cancelado");
    
    private String descricao;
    
    private EStatusCartao(String descricao) {
        this.descricao = descricao;
    }

    public String getDescricao() {
        return descricao;
    }
    
}
