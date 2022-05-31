<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>L4 EX1(VOLTAS)</title>
  </head>
  <body class ="container">
    <h1>L4 EX1(VOLTAS)</h1>
    <form action = "resposta.php" method = "POST">
    <div class ="row">
            <?php
                $n_voltas = $_POST['n_voltas'];
                $_SESSION['n_voltas'] = $n_voltas;
                for ($i=1; $i<=$n_voltas ; $i++){
            ?>

            <div class ="col">
                <label for ="tempo<? $i ?>" class= "label-control">
                    INFORME O TEMPO DA VOLTA: <?=$i?>
                </label>
                <input type = "number" name="tempo<?=$i ?>" id="tempo<?=$i?>"
                    class = "form-control"/>
            </div>
            <?php
                }
            ?>
    </div>
    <div class = "row mt-3">
        <div class = "col">
            <button class = "btn btn-primary"> 
              ENVIAR
             </button>
        </div>
    </div>
    
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