<?php
    require '../src/View/Header/Header.php';
?>
<div class="formulario" style="width: 50%; margin: 5% auto;">
    <div class="mb-3">
        <label for="formTitle" class="form-label">Título</label>
        <input type="text" class="form-control" id="formTitle" placeholder="Insira aqui o título">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Texto</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</div>
        <h1>Alterar Categoria</h1>
        <form method="post" action="/categoria/editar/<?=$resultado['id']?>">
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">
                    Informe a descrição:
                </label>
                <input type="text" class="form-control" 
                    name="descricao" id="descricao" 
                    value="<?=$resultado['descricao']?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-secondary">
                    Editar
                </button>
            </div>
        </div>
        </form>
<?php
    require '../src/View/Home/Footer.php';  