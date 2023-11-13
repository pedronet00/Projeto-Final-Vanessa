<?php
    //require '../src/View/Header.php';
?>

<h1>Inserir Membros</h1>

<div class="container mt-5">

    <form method="post" action="/Parceiro/gravar" enctype="multipart/form-data">

    <div class="row">
      <div class="col">
          <label for="nome" class="form-label">Informe o Nome: </label>
          <input type="text" name="nome" id="nome" class="form-control" required/> 
      </div>
    </div>

    <div class="row">
      <div class="col">
          <label for="curso" class="form-label">Informe o Curso: </label>
          <input type="text" name="curso" id="curso" class="form-control" required/> 
      </div>
    </div>

    <div class="row">
      <div class="col">
          <label for="cargo" class="form-label">Informe o Cargo: </label>
          <input type="text" name="cargo" id="cargo" class="form-control" required/> 
      </div>
    </div>

    <div class="row">
      <div class="col">
          <label for="imagem" class="form-label">Insira a imagem do Membro: </label>
          <input type="file" name="imagem" id="imagem" class="form-control" required/> 
      </div>
    </div>

    <div class="row"> 
        <div class="col">
            <button type="submit" class="btn btn-secondary mt-3 mb-3">Gravar</button>
        </div>
    </div>

    </form>
</div>

<?php
    //require '../src/View/Footer.php';

    