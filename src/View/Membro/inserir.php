<?php
require '../src/View/Header.php';
?>

<div class="container">
<h1>Inserir Membros</h1>
    <form method="post" action="/noticia/gravar">
    <input type="hidden" class="form-control" name="usuario_id" id="usuario_id" value="1" />
        <div class="row">
            <div class="col">
                <label for="titulo" class="form-label">
                    Informe o Nome:
                </label>
                <input type="text" class="form-control" placeholder="Insira o Nome" name="Nome" id="Nome" require />
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <label for="data_noticia" class="form-label">
                    Informe o Curso:
                </label>
                <input type="text" class="form-control" id="Curso" placeholder="Insira o Curso">
            </div>
        </div>
        <div class="row">
            <div class="col">
            <label for="formName" class="form-label">Informe o Cargo</label>
        <input type="text" class="form-control" id="Cargo" placeholder="Insira o Cargo">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="texto" class="form-label">
                    Envie sua Foto:
                </label>
                <input type="file" class="form-control-file mt-3" id="formFoto">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-secondary mt-3 mb-3">
                    Inserir
                </button>
            </div>
        </div>
    </form>
</div>
<?php
require '../src/View/Footer.php';
?>