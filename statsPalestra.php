<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>stats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class='text-center'>Statistiche Della Palestra</h1>
    <hr>
    <br>
    <div>
        <?php
            $ingressiTot = $_SESSION['numUtenti'];
            $incasso = $_SESSION['guadagnoTot'];
            echo "<h3 class='text-center text-danger'>Numero di utenti registrati:</h3>";
            echo "<h3 class='text-center'>$ingressiTot</h3>";
            echo "<h3 class='text-center text-danger'>Incasso totale della palestra:</h3>";
            echo "<h3 class='text-center'>$incasso</h3>";
        ?>
        <h5 class="text-center"><a class="link-opacity-75" href='./index.php'>Inserisci altri utenti</a></h5>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>