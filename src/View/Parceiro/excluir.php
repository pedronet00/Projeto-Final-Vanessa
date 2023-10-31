<?php
    require '../src/View/Header.php';
?>

<div class="container mt-5">

    <h1>Excluir Parceiro</h1>
    <form method="post" action="/Parceiro/deletar/<?=$resultado['id']?>">
        
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome do Parceiro: </label>
                <input type="text" class="form-control" name="nome" id="nome" value="<?=$resultado['nome']?>"/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe a descrição do Parceiro: </label>
                <input type="text" class="form-control" name="descricao" id="descricao" value="<?=$resultado['descricao']?>"/>
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
                <h5 class="text-danger">Deseja realmente excluir o registro?</h5>

                <button type="submit" class="btn btn-danger">
                    Excluir
                </button>
            </div>
        </div>
        
    </form>
</div>

<?php
require '../src/View/Footer.php';