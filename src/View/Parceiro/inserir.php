<?php
    require '../src/View/Header.php';
?>

<div class="container mt-5">

    <form method="post" action="/Parceiro/gravar" enctype="multipart/form-data">

    <div class="row">
      <div class="col">
          <label for="nome" class="form-label">Informe o Nome do Parceiro: </label>
          <input type="text" name="nome" id="nome" class="form-control" required/> 
      </div>
    </div>

    <div class="row">
      <div class="col">
          <label for="descricao" class="form-label">Informe a descrição do Parceiro: </label>
          <input type="text" name="descricao" id="descricao" class="form-control" required/> 
      </div>
    </div>

    <div class="row">
      <div class="col">
          <label for="imagem" class="form-label">Insira a imagem do Parceiro: </label>
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
    require '../src/View/Footer.php';