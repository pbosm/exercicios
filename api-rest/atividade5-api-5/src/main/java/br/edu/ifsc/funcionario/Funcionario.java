package br.edu.ifsc.funcionario;

public class Funcionario {
	
	private int matricula;
	private String nome;
	private double salariobase;
	private int numero;
	
	
	public Funcionario(int matricula, String nome, double salarioBase, int numero) {
		super();
		this.matricula = matricula;
		this.nome = nome;
		this.salariobase = salarioBase;
		this.numero = numero;
	}

	public int getMatricula() {
		return matricula;
	}


	public void setMatricula(int matricula) {
		this.matricula = matricula;
	}


	public String getNome() {
		return nome;
	}


	public void setNome(String nome) {
		this.nome = nome;
	}


	public double getSalarioBase() {
		return salariobase;
	}


	public void setSalarioBase(double salarioBase) {
		this.salariobase = salarioBase;
	}


	public int getNumero() {
		return numero;
	}


	public void setNumero(int numero) {
		this.numero = numero;
	}
	
	public double calcularSalarioliquido()
	{
		int salariofamilia = numero * 150;
        if (salariobase>=8500)
        {
            return salariobase - (salariobase *27.5/100) + salariofamilia;
        }
        if (salariobase>=5000)
        {
            return salariobase - (salariobase *15/100) + salariofamilia;
        }
        if (salariobase <=5000)
        {
        	return salariobase + salariofamilia;
        }
        return salariobase;		
	}
	
}


	
	

