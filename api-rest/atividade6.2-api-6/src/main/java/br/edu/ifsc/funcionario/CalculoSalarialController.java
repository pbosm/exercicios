package br.edu.ifsc.funcionario;

import java.util.List;

import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

@RestController

public class CalculoSalarialController 
{
		
		
		@RequestMapping(value = "salario_liquido/{salariobase}", method = RequestMethod.GET)
		
		public double criarFuncionario
							  (@PathVariable("salariobase") Double salariobase)
		
		{
			Funcionario funcionario = new Funcionario(salariobase);
			FuncionarioDataSource.novo(funcionario);
			return funcionario.calcularSalarioliquido();
		}

}



