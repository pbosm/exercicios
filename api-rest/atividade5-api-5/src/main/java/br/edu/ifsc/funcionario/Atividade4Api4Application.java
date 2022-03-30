package br.edu.ifsc.funcionario;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class Atividade4Api4Application {

	public static void main(String[] args) {
		
		FuncionarioDataSource.criarFuncionario();
		SpringApplication.run(Atividade4Api4Application.class, args);
	}

}
