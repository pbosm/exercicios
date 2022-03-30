package br.edu.ifsc.funcionario;

import java.util.ArrayList;
import java.util.List;

public class FuncionarioDataSource 
{
	private static List<Funcionario> listaFuncionario = new ArrayList<>();
	
	public static void criarFuncionario()
{
		listaFuncionario.add(new Funcionario(1, "Pablo", 3000,10));
		listaFuncionario.add(new Funcionario(2, "Marco", 3000,90));
		listaFuncionario.add(new Funcionario(3, "Rafa", 3000,8));
		listaFuncionario.add(new Funcionario(4, "Rubens", 3000,7));
		listaFuncionario.add(new Funcionario(5, "Borgin", 3000,6));		
}

	public static List<Funcionario> getListaFuncionario()
	{
		return listaFuncionario;
	}
	
	public static void novo (Funcionario funcionario)
	{
		listaFuncionario.add(funcionario);
	}
}
