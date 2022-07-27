/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package domain;

/**
 *
 * @author mpisc
 */
public class CartaoCredito implements IOperacao {
    private int numero;
    private double limite;
    private String dataValidade;
    private double saldo;
    
    private Cliente cliente;
    
    private EStatusCartao status;

    public EStatusCartao getStatus() {
        return status;
    }

    public void setStatus(EStatusCartao status) {
        this.status = status;
    }
    
    public int getNumero() {
        return numero;
    }

    public void setNumero(int numero) {
        this.numero = numero;
    }

    public double getLimite() {
        return limite;
    }

    public void setLimite(double limite) {
        this.limite = limite;
    }

    public String getDataValidade() {
        return dataValidade;
    }

    public void setDataValidade(String dataValidade) {
        this.dataValidade = dataValidade;
    }

    public Cliente getCliente() {
        return cliente;
    }

    public void setCliente(Cliente cliente) {
        this.cliente = cliente;
    }
    
    

    @Override
    public boolean sacar(double quantia) {
        if (status == EStatusCartao.DESBLOQUEADO) {
            if (quantia <= (limite + saldo)) {
                this.saldo -= quantia;
                return true;
            }
        }
        return false;
    }

    @Override
    public void depositar(double quantia) {
        this.saldo += quantia;
    }

    @Override
    public double getSaldo() {
        return saldo + limite;
    }
    
    public String getDados() {
        StringBuilder sb = new StringBuilder();
        sb.append(this.getNumero()).append(" Validade ").append(this.getDataValidade()).append("  R$ ").
                        append(this.getSaldo()).append(" Status ---> ").
                        append(this.getStatus().getDescricao()).
                        append("\n");        
        return sb.toString();
    }
    
}
