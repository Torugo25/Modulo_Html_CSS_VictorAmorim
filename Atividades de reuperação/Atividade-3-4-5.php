<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de reuperação</title>
</head>
<body>
      <div class="container">
        <div class="text_center">
            <h1>Série de Fiobonacci</h1>
        </div>
           <form action="" method="get">
             <div class="input-group input-group-lg mt-3">
                <span class="input-group-text" id="input-group-sizing-lg">Digite o número de digitos que deseja receber.</span>
                <input type="text" class="form- control" aria-label="Sizing example input" name="value" aria-describedby="input-group-sizing-lg">
             </div>
             <div class="col-auto mt-3">
                <button type="submit" class="btn btn-primary mb-3">Resolver</button>
             </div>
           </form>
      </div>

      <?php
        $value = $_GET['value'] ?? null;
        $ultimo = 1;
        $penultimo = 0;

        echo '0 <br>';
        echo '1 <br>';

        for($1 = 1; $1 <= $value -2; $1++){
            $atual = $ultimo + $penultimo
            echo $atual . '<br>';
            $penultimo = $ultimo;
            $ultimo = $atual; 
        }
      ?>
    

</body>
</html>

