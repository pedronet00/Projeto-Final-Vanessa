<?php
    require '../src/View/Home/Header.php';
?>
<div class="container">
        <h1 class="mt-3">Excluir Processo Seletivo Membro</h1>
        
        <form method="post" action="/ProcessoSeletivoMembros/deletar/<?=$resultado['id']?>">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">
                    Nome:
                </label>
                <input type="text" class="form-control" 
                    name="nome" id="nome" 
                    value="<?=$resultado['nome']?>" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">
                    E-mail:
                </label>
                <input type="text" class="form-control" 
                    name="email" id="email" 
                    value="<?=$resultado['email']?>" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">
                    Telefone:
                </label>
                <input type="text" class="form-control" 
                    name="telefone" id="telefone" 
                    value="<?=$resultado['telefone']?>" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="curso" class="form-label">
                    Curso:
                </label>
                <input type="text" class="form-control" 
                    name="curso" id="curso" 
                    value="<?=$resultado['curso']?>" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="termo" class="form-label">
                    Termo:
                </label>
                <input type="text" class="form-control" 
                    name="termo" id="termo" 
                    value="<?=$resultado['termo']?>" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="ra" class="form-label">
                    R.A.:
                </label>
                <input type="text" class="form-control" 
                    name="ra" id="ra" 
                    value="<?=$resultado['ra']?>" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="text-danger">
                    Deseja realmente excluir o registro?
                </h5>
                <button type="submit" class="btn btn-danger mt-5 mb-4">
                    Excluir
                </button>
            </div>
        </div>
        </form>
        </div>
<?php
    require '../src/View/Home/Footer.php';