<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 
    <title>Dados Carros na tabela</title>
</head>
<body>
<?php

$carro = $_GET['carro'];
$marca = $_GET['marca'];
$coresCarro = $_GET['coresCarro'];
$automatico = $_GET['automatico'];


?>
<div class="container">
<div class="mt-5 border border-dark p-3 rounded ">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Carro</th>
      <th scope="col">Marca</th>
      <th scope="col">Cor</th>
      <th scope="col">Automatico</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo($carro); ?></th>
      <td><?php echo($marca);?></td>
      <td><?php echo($coresCarro);?></td>
      <td><?php echo($automatico);?></td>
    </tr>
   
  </tbody>
</table>
</div>
</div>
</body>
</html>




