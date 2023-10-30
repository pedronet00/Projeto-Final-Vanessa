<?php
    require '../src/View/Home/Header.php';
?>
        <h1>Adicionar novo membro</h1>
        <form method="post" action="/ProcessoSeletivoMembros/gravar">
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">
                    Informe a descrição:
                </label>
                <input type="text" class="form-control" 
                    name="descricao" id="descricao"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-secondary">
                    Inserir
                </button>
            </div>
        </div>
        </form>
<?php
    require '../src/View/Home/Footer.php';  