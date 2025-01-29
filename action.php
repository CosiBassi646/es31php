<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Risultati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Prezzi degli utenti</h1>
    <?php
        $prezzoAbbonamento = 45;
        $nomeUtente = $_GET['nomeUtente'];
        $etaUtente = $_GET['etaUtente'];
        if($etaUtente < 18 || $etaUtente > 65){ //controllo se può essere applicato lo sconto per l'età
            $prezzoAbbonamento = 35;
        }
        $tipoPagamento = $_GET['tipoPagamento'];
        if($tipoPagamento == 'mensile'){
            //non si applicano sconti
        }else{
            if($tipoPagamento == 'bimestrale'){ //sconto bimestrale
                $sconto = ($prezzoAbbonamento/100)*10;
                $prezzoAbbonamento = $prezzoAbbonamento - $sconto;
            }else{
                if($tipoPagamento == 'trimestrale'){ //sconto trimestrale
                    $sconto = ($prezzoAbbonamento/100)*15;
                    $prezzoAbbonamento = $prezzoAbbonamento - $sconto;
                }else{
                    if($tipoPagamento == 'annuale'){ //sconto annuale
                        $sconto = ($prezzoAbbonamento/100)*20;
                        $prezzoAbbonamento = $prezzoAbbonamento - $sconto;
                    }
                }
            }
        }
        echo $nomeUtente;
        echo "<br>";
        echo $etaUtente;
        echo "<br>";
        echo $prezzoAbbonamento;
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>