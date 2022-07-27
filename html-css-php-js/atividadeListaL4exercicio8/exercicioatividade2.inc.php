<?php
//////////////////////////////////////////////////////////////
    function calcularmediasimples($aluno, $nota1, $nota2, $nota3)
        {
        $mediasimples = ($nota1 + $nota2 + $nota3) / 3; //mediasimples
        $mediasimplesformatada = $mediasimples = number_format($mediasimples, 2, ",", ".");

        echo "<p> Notas do aluno: <span> $aluno </span> <br>
        1ª Nota:<span> $nota1 </span> <br>
        2ª Nota:<span> $nota2 </span> <br>
        3ª Nota:<span> $nota3 </span> <br>
        Média simples do aluno <span> $aluno </span> é: <span> $mediasimplesformatada </span> </p>";
        }
/////////////////////////////////////////////////////////////////////// 
    function calcularmediaponderada($aluno, $nota1, $nota2, $nota3)
        
        {
        $pesonota1 = $nota1 * 5;
        $pesonota2 = $nota2 * 3;
        $pesonota3 = $nota3 * 2;

        $mediaponderada = ($pesonota1 + $pesonota2 + $pesonota3) / 10; //mediaponderoda
        $mediaponderadaformatada = number_format($mediaponderada, 2, ",", ".");
        
        echo "<p> Notas do aluno: <span> $aluno </span> <br>
        1ª Nota:<span> $nota1 </span> <br>
        2ª Nota:<span> $nota2 </span> <br>
        3ª Nota:<span> $nota3 </span> <br>
        Média ponderada do aluno <span> $aluno </span> é: <span> $mediaponderadaformatada </span> </p>";
        }
//////////////////////////////////////////////////////////////////////////


?>
