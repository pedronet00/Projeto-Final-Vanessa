<?php
    require '../src/View/Home/Header.php';
?>
        <h1>Alterar Processo Seletivo do Membro</h1>
        <div class="container">
        <form method="post" action="/ProcessoSeletivoMembros/editar/<?=$resultado['id']?>">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">
                    Nome:
                </label>
                <input type="text" class="form-control" 
                    name="nome" id="nome" 
                    value="<?=$resultado['nome']?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">
                    E-mail:
                </label>
                <input type="text" class="form-control" 
                    name="email" id="email" 
                    value="<?=$resultado['email']?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">
                    Telefone:
                </label>
                <input type="text" class="form-control" 
                    name="telefone" id="telefone" 
                    value="<?=$resultado['telefone']?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="curso" class="form-label">
                    Curso:
                </label>
                <input type="text" class="form-control" 
                    name="curso" id="curso" 
                    value="<?=$resultado['curso']?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="termo" class="form-label">
                    Termo:
                </label>
                <input type="text" class="form-control" 
                    name="termo" id="termo" 
                    value="<?=$resultado['termo']?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="ra" class="form-label">
                    R.A.:
                </label>
                <input type="text" class="form-control" 
                    name="ra" id="ra" 
                    value="<?=$resultado['ra']?>"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-secondary">
                    Editar
                </button>
            </div>
        </div> 
        </div> 
        </form>
<?php
    require '../src/View/Home/Footer.php';  