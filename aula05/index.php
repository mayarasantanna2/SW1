<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body style="background-color:rgb(255, 255, 255)">

    <div class="container mt-5 mb-5 text-center d-flex justify-content-center ">
        <div class="card mb-3" style="max-width: 18rem; background-color: #0d6efd;">
        <div class="card-body">
            <h5 class="card-title">PÁGINA INICIAL - AULA 5</h5>
        </div>
        </div>
    </div>

  <form action="processa.php" method="post">


    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4 text-center">
      <label class="form-label d-block mb-2" for="form2Example1">Email </label>
      <input type="email" id="form2Example1" class="form-control w-25 mx-auto" name="email" required />
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4 text-center">
      <label class="form-label d-block mb-2" for="form2Example2">Senha</label>
      <input type="password" id="form2Example2" class="form-control w-25 mx-auto" name="senha" required />
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4 mt-5 w-25 mx-auto">
      <div class="col-6 d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
          <label class="form-check-label" for="form2Example34">Lembre de mim</label>
        </div>
      </div>

      <div class="col-6 d-flex justify-content-center">
        <!-- Simple link -->
        <a href="#!">Esqueceu sua senha?</a>
      </div>
    </div>
    <!-- Submit button -->
    <div class="d-flex justify-content-center mt-5">
      <input type="submit" class="btn btn-primary btn-block mb-4" value="Enviar">
    </div>

  </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>