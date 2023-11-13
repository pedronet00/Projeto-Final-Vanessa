<?php
    //require '../src/View/Header.php';
?>

<div class="container mt-5">

    <h1>Alterar Membro</h1>
    <form method="post" action="/Membro/editar/<?=$resultado['id']?>" enctype="multipart/form-data">
        
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o Nome: </label>
                <input type="text" class="form-control" name="nome" id="nome" value="<?=$resultado['nome']?>"/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="curso" class="form-label">Informe o Curso: </label>
                <input type="text" class="form-control" name="curso" id="curso" value="<?=$resultado['curso']?>"/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="cargo" class="form-label">Informe o Cargo: </label>
                <input type="text" class="form-control" name="cargo" id="cargo" value="<?=$resultado['cargo']?>"/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="imagem" class="form-label">Insira a imagem: </label>
                <input type="file" class="form-control" name="imagem" id="image" value="<?=$resultado['imagem']?>"/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-secondary">Editar</button>
            </div>
        </div>
        
    </form>
</div>

<?php
//require '../src/View/Footer.php';