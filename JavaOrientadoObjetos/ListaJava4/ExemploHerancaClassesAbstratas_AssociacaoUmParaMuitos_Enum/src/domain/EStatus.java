/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Enum.java to edit this template
 */
package domain;

/**
 *
 * @author mpisc
 */
public enum EStatus {
    ATIVO(1, "O cliente está ativo"), INATIVO(2, "Cliente inativo - não pode executar operações");
    
    private int codigo;
    private String descricao;
    
    private EStatus(int codigo, String descricao) {
        this.codigo = codigo;
        this.descricao = descricao;
    }

    public int getCodigo() {
        return codigo;
    }

    public String getDescricao() {
        return descricao;
    }
    
    
}
