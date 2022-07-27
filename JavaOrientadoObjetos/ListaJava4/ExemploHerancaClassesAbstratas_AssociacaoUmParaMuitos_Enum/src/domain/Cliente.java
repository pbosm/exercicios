/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package domain;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author mpisc
 */
public class Cliente {
    private String nome;
    private String cpf;
    
    private EStatus status;
    
    //associacao um para muitos com implementação de uam lista dinâmica
    private List<CartaoCredito> cartoes; //esta lista aceita somente tipos CartaoCredito
    //private List cartoesCredito;//esta declaração não é recomendada, 
    // pois aceita qualquer tipo de objeto.

    public EStatus getStatus() {
        return status;
    }

    public void setStatus(EStatus status) {
        this.status = status;
    }
    
    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getCpf() {
        return cpf;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }
    
    public void add(CartaoCredito cartao) {
        if (this.cartoes == null) {
            cartoes = new ArrayList<>();
        }
        this.cartoes.add(cartao);
        cartao.setCliente(this);
    }
    
    public void remove(CartaoCredito cartao) {
        if (this.cartoes != null) {
            this.cartoes.remove(cartao);
            cartao.setCliente(null);
        }
    }
    
    public String getDados() {
        StringBuilder sb = new StringBuilder();
        sb.append("***** Dados do Cliente *****").append("\n");
        sb.append("Nome...........: ").append(this.nome).append("\n");
        sb.append("CPF............: ").append(this.cpf).append("\n");
        //sb.append("Status.........: ").append(this.status).append("\n");
        sb.append("Status.........: ").append(this.status.getCodigo()).append(" - ").append(sb).append(this.status.getDescricao()).append("\n");
        sb.append("========= Cartões ==========").append("\n");
        if (cartoes != null && !cartoes.isEmpty()) {
            for (CartaoCredito cartao : cartoes) {
                sb.append(cartao.getDados());
            }
        } else {
            sb.append("O cliente não possui cartões!").append("\n");
        }      
        return sb.toString();
    }
    
}
