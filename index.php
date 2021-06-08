<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Usando o JavaScript</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center"> Cadastro de Carros </h1>
        <div class="mt-5">

            <form method="Get" action="dadosCarro.php" class="border border-dark p-3 rounded ">
                <div class="row mb-3">
                    <label for="inputCarro3" class="col-sm-2 col-form-label">Carro</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCarro3" name="carro" required >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputMarca3" class="col-sm-2 col-form-label">Marca</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputMarca3" name="marca" required>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Cores</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="coresCarro" id="corBranca" value="branca" checked>
                            <label class="form-check-label" for="corBranca">
                                Branca
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="coresCarro" id="corPreta" value="preta">
                            <label class="form-check-label" for="corPreta">
                                Preta
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="coresCarro" id="corMetalica" value="metalica">
                            <label class="form-check-label" for="corMetalica">
                                metalica
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="automatico" name="automatico">
                            <label class="form-check-label" for="automatico">
                                Automático
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>

    </div>
</body>

</html>