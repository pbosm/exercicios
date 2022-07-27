//tornando umma função global
//var objetoNome;
//var objetoSalario;

function limparNome(objetoErroNome)
{
objetoErroNome.innerHTML = '';
}

//---------------------------------------------------/
function limparSalario(objetoErroSalario)
{
objetoErroSalario.innerHTML = '';
}

//---------------------------------------------------/
function validarDados(evento)
{
//acessar o DOM, pegar os elementos do php do formulario por meio de criação de objetos javascript
var objetoNome        = document.getElementById("nome");
var objetoSalario     = document.getElementById("salario");
var objetoErroNome    = document.getElementById("erro-nome");
var objetoErroSalario = document.getElementById("erro-salario");

//pegando o que o usuario digita em cada caixa do formulario
var nomeDigitado    = objetoNome.value;
var salarioDigitado = objetoSalario.value;

//monstrando os dados das duas variáveis no console do JS
console.log("Nome digitado = "    + nomeDigitado + "\n" + "Salário digitado = " + salarioDigitado);

//controle de erros
var erro = false; 

//retirar espaços em branco digitados nos campos de formulario
nomeDigitado = nomeDigitado.trim();
salarioDigitado = salarioDigitado.trim();

//validando os dados - verificar se as caixa nome está em branco
if(nomeDigitado.length == 0)
{
 erro = true;
 objetoErroNome.innerHTML = "Erro: caixa nome vazia!";
}

//no caso da variavel erro ser true, desativamos o submit para ir a proximo página (ação padrão do navegador)
if(erro == true)
{
 evento.preventDefault(); // tem que colocar o nome (evento) dentro da função or funções que utiliza essa (validarDados)
}

//validar se a caixa salario é um valor numéricor real
var salarioConvertido = parseFloat(salarioDigitado);

if(salarioDigitado != salarioConvertido)
{
erro = true
objetoErroSalario.innerHTML = "Erro: Não é um número!";
}

if(erro == true)
{
 evento.preventDefault(); // tem que colocar o nome (evento) dentro da função (validarDados)
 //alert("Devido a erros na validação dos dados, o formulario foi reiniciado! tente novamente!");
}

//limpar mensagens de erro para não ficar pra sempre, feito atráves pelo modo click
objetoNome.addEventListener("click",    function() {limparNome(objetoErroNome);} ); //FUNÇÃO ANONIMA
objetoSalario.addEventListener("click", function() {limparSalario(objetoErroSalario);} ); //FUNÇÃO ANONIMA


}