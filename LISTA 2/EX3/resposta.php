<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>L2 EX3(RESPOSTA)</title>
  </head>
  <body class ="container">
    <h1>L2 EX3(RESPOSTA)</h1>

    <?php
  
      for ($i=1; $i<=10; $i++)
      {
        $ordenado[$i] = $_POST["valor$i"];
      }
      
      echo "<br>";
      echo "ORDENADO";
      echo "<br>";
      
      function numOrdenado($ordenado)
      {
        sort($ordenado);
        foreach ($ordenado as $chave => $valor)
        {
          echo "<br>";
          echo "POSIÇÃO DO VETOR: $chave ,SEU VALOR: $valor";
          echo "<br>";
        }
      }

      function numRepetido($ordenado)
      {
        echo "<br>";
        echo "VALORES IGUAIS SUBSTITUIDOS POR: - ";
        echo "<br>";

        foreach ($ordenado as $chave => $valor)
        {
          $vIgual = 0;
          for ($i=1; $i<=10; $i++)
          {
            if($ordenado[$i] == $valor)
               $vIgual++;
          }
          if ($vIgual >= 2)
            $ordenado[$chave] = "-";
            echo "<br>";
            echo "VALOR: $ordenado[$chave]";
            echo "<br>";
        }    
      }

      numOrdenado($ordenado);
      numRepetido($ordenado);

    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
