<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>es31php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>PALESTRA 2.0</h1>
    <div>
        <form action="./action.php">
            <h4>Nome:</h4>
            <input type="text" name="nomeUtente">
            <h4>Età:</h4>
            <input type="number" name="etaUtente">
            <!---input radio per l'età!-->
            <br>
            <h3>Seleziona un tipo di pagamento:</h3>
            <input type="radio" id="mensile" name="tipoPagamento" value="mensile">
            <label for="mensile">Mensile</label><br>
            <input type="radio" id="bimestrale" name="tipoPagamento" value="bimestrale">
            <label for="bimestrale">Bimestrale</label><br>
            <input type="radio" id="trimestrale" name="tipoPagamento" value="trimestrale">
            <label for="trimestrale">Trimestrale</label><br>
            <input type="radio" id="annuale" name="tipoPagamento" value="annuale">
            <label for="annuale">Annuale</label>
            <br>
            <input type="submit">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>