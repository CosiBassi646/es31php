<?php
    session_start();
    if(!isset($_SESSION['numUtenti'])){
        $users = 0; 
        $_SESSION['numUtenti'] = $users;
    }

    if(!isset($_SESSION['guadagnoTot'])){
        $entrate = 0; 
        $_SESSION['guadagnoTot'] = $entrate;
    }

?>
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
        $nUtenti = $_SESSION['numUtenti'];
        $entrateTot = $_SESSION['guadagnoTot'];
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
        //aggiungo il prezzo dell'abbonamento agli incassi totali
        $entrateTot = $entrateTot + $prezzoAbbonamento;
        $_SESSION['guadagnoTot'] = $entrateTot;
      ?>
      <div class="w-50">
          <table class="table text-center table-bordered">
              <tr>
                  <th colspan = "3">Dati inseriti nel form</th>
                  <th colspan = "1">risposta del server</th>
              </tr>
              <tr>
                  <th>Nome</th>
                  <th>Età</th>
                  <th>Pagamento</th>
                  <th>Output</th>
              </tr>
                <tr>
              <?php
                echo"<td>$nomeUtente</td>";
                echo"<td>$etaUtente</td>";
                echo"<td>$tipoPagamento</td>";
                echo"<td>Il prezzo per un'anno è di  $prezzoAbbonamento €</td>";
                $nUtenti++;
                $_SESSION['numUtenti'] = $nUtenti; //aggiungo l'untente al conteggio
              ?>
              </tr>
          </table>

          <div>
              <a class="link-opacity-75" href='./statsPalestra.php'>Visualizza le statistiche della palestra</a>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>