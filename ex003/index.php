<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de Tipos primitivos</h1>
    <?php 
        $nome = "Davi";
        $sobrenome = "Souza";
        const PAIS = "Brasil"; // não dá pra atribuir outro valor depois

        print "Muito prazer, \u{1F418} $nome $sobrenome! Você mora no " . PAIS; // pode usar para colocar outras coisas ""

        print "<br><br>";

        print 'Muito prazer, \u{1F418} $nome $sobrenome! Você mora no ' . PAIS; // mostra o que está digitado '' o mesmo vale para variaveis

        print "<br><br>";

        // $num = 0xAD;
        // $hexa = 0x1A;
        // $binario = 0b0101;
        // $octa = 010;

        // 0x = hexadecimal
        // 0b = binário
        // 0 = octal

        // $v = (integer) 3e2; // 3 x 10^2 coerção

        // var_dump($v);
        // echo "O valor da variável é $v";

        // $num = (float) "950";
        // var_dump($num);
        // echo "<br>";
        // echo "O valor da variável é $num";

        // $casado = true;
        // print("Você é casado? $casado")

        // $vet = [6, 2, 1, 0, 0, 0, 0, 0, 0, 0];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa();
        var_dump($p);

        echo "<br><br>";

        const ESTADO = "RJ";
        $nom = "Davi";
        $sobrenome = "Souza";
        $curso = "Curso em Video";
        $ano = 2020;
        echo "Moro no " . ESTADO;
        echo "<br>";
        echo "$nom \"Davizinho\" $sobrenome <br><br>"; // sequencias de escapes \n \t \\ \$ \u{} unicode

        echo <<< FRASE
            Estou estudando
                $curso em $ano
        FRASE; // Heredoc

        echo "<br><br>";

        echo <<< 'FRASE'
            Estou estudando
                $curso em $ano
        FRASE; // Nowdoc
    ?>
</body>
</html>