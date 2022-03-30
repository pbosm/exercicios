package br.edu.ifsc.funcionario;

import java.util.List;

import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

@RestController

public class CalculoSalarialController 
{
		
		//adiciona funcionarios e mostra salario apos calculo gerado pelas dados informados
		@RequestMapping(value = "/adicionarFuncionario/{matricula}/{nome}/{salariobase}/{numero}", method = RequestMethod.GET)
		
		public double criarFuncionario
							  (@PathVariable("matricula")int matricula,
							  @PathVariable("nome") String nome,
							  @PathVariable("salariobase") Double salariobase,
							  @PathVariable("numero") int numero)
		
		{
			Funcionario funcionario = new Funcionario(matricula, nome, salariobase, numero);
			FuncionarioDataSource.novo(funcionario);
			return funcionario.calcularSalarioliquido();
		}
			
			//calcula o salario dos funcionarios pela matricula
			@RequestMapping(value = "/calcularSalario/{matriculax}", method = RequestMethod.GET)
			
			public double calcularSalario
								  (@PathVariable("matriculax")int matriculax)
			{
				Funcionario funcionario = FuncionarioDataSource.getListaFuncionario().get(matriculax);
				return funcionario.calcularSalarioliquido();
			}

	//exibi todos os funcionarios colocados pela geral
	@RequestMapping(value = "/funcionarios")
	public List<Funcionario> getFuncionario()
	{
		return FuncionarioDataSource.getListaFuncionario();
	}




}



