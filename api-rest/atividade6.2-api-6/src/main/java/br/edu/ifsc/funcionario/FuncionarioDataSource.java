package br.edu.ifsc.funcionario;

import java.util.ArrayList;
import java.util.List;

public class FuncionarioDataSource 
{
	private static List<Funcionario> listaFuncionario = new ArrayList<>();
	
	public static void criarFuncionario()
{
	
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
