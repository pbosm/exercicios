//ciando uma function
//function trocarCSS()
//{
//    formulario.style.color = "red";
//}

//EXEMPLO function trocarCSSDoBotao()
//{
//   botao.style.color = "green";
//}

//EXEMLO associando um evento do tipo clique do mouse sobre qlr area do formulario para mudar a cor
//formulario.addEventListener("click", trocarCSS);
//formulario.addEventListener("click", trocarCSSDoBotao);

/* acessando o formulário no documento web por meio do DOM */
var formulario = document.getElementById("formulario");
var botao      = document.getElementById("botao");

//EXEMPLO : associando um evento do tipo clique do mouse sobre qlr area do formulario para mudar a cor
//formulario.addEventListener("click", trocarCSS);
//formulario.addEventListener("click", trocarCSSDoBotao);

//associar um evento do tipo submit toda que o usuario envia os dados do formulario ao servidor
formulario.addEventListener("submit", validarDados);




