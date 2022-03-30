package br.edu.ifsc.funcionario;

public class Funcionario {
	
	private double salariobase;
	
	
	public Funcionario(double salarioBase) {
		super();
		this.salariobase = salarioBase;
	}


	public double getSalarioBase() {
		return salariobase;
	}


	public void setSalarioBase(double salarioBase) {
		this.salariobase = salarioBase;
	}

	
	public double calcularIrpf()
	{
		if (salariobase > 4664.68) 
        {
            return (salariobase * 27.5/100) - 869.36;
        }
        else if (salariobase >=  3751.06) 
        {
            return (salariobase * 22.5/100) - 636.13;
        }
        else if (salariobase >= 2826.66) 
        {
            return (salariobase * 15/100) - 354.80;
        }
        else if (salariobase >= 1903.99) 
        {
            return (salariobase * 7.5/100) - 142.80;    
        }
        else return salariobase;
	}
	
	public double calcularInss()
	{
		if (salariobase > 6101.06) 
		{
			return 6101.06 * 14/100;
		}
		if (salariobase >= 3134.41) 
		{
			return salariobase * 14/100;
		} 
		if (salariobase >= 2089.61) 
		{
			return salariobase * 12/100;
		} 
		if (salariobase >= 1045.01) 
		{
			return salariobase * 9/100;
		} 
		else
		{
			return salariobase * 7.5/100;
		}
	}
	
	public double calcularSalarioliquido()
	{
		return salariobase - calcularIrpf() - calcularInss();
	}
	
}


	
	

