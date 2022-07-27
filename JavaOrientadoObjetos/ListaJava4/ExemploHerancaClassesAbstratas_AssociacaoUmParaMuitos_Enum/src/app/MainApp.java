/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package app;

import domain.CartaoCredito;
import domain.Cliente;
import domain.Conta;
import domain.ContaCorrente;
import domain.ContaDetalhada;
import domain.EStatus;
import domain.EStatusCartao;
import domain.IOperacao;
import domain.Poupanca;
import java.text.DecimalFormat;

/**
 *
 * @author mpisc
 */
public class MainApp {

    public static void main(String[] args) {

        Cliente cliente = new Cliente();
        cliente.setCpf("999.999.888-99");
        cliente.setNome("Roberto");
        cliente.setStatus(EStatus.INATIVO);
        
              
        CartaoCredito cartao = new CartaoCredito();
        //cartao.setCliente(cliente);
        cartao.setDataValidade("12/01/2025");
        cartao.setLimite(10000);
        cartao.setNumero(1234432);
        cartao.setStatus(EStatusCartao.DESBLOQUEADO);
        
        cliente.add(cartao);
        
        CartaoCredito cartao2 = new CartaoCredito();
        //cartao.setCliente(cliente);
        cartao2.setDataValidade("21/10/2025");
        cartao2.setLimite(15000);
        cartao2.setNumero(4321543);
        cartao2.setStatus(EStatusCartao.BLOQUEADO);
        
        cliente.add(cartao2);
        
       // cliente.remove(cartao2);
       // cliente.remove(cartao);
        
        
        System.out.println(cliente.getDados());
        
        sacar(cartao, 200.00);
        if (!sacar(cartao2, 100.00)) {
            System.out.println("Não foi possível executar a operação de saque" + "\n"
                    + "Status do cartao: " + cartao2.getStatus().getDescricao());
        }
        
        
        System.out.println(cartao.getDados());
        System.out.println(cartao2.getDados());       
      
        
    }
    
    public static boolean sacar(IOperacao operacao, double quantia) {
        return operacao.sacar(quantia);
    }

    /**
     *
     * @param conta é um parâmetro que pode receber qualquer tipo de objeto
     * Conta, ou seja, uma conta corrente ou poupança
     */
    public static void imprimir(Conta conta) {
        ContaDetalhada cd = new ContaDetalhada();
        System.out.println(cd.imprimir(conta));

    }
   
}
