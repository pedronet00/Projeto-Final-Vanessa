<?php
    require '../src/View/Home/Header.php';
?>
        <h1>Adicionar novo membro</h1>
        <div class="container">
        <form method="post" action="/ProcessoSeletivoMembros/gravar">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">
                    Informe o nome:
                </label>
                <input type="text" class="form-control" 
                    name="nome" id="nome"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">
                    Informe o e-mail:
                </label>
                <input type="text" class="form-control" 
                    name="email" id="email"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">
                    Informe o telefone:
                </label>
                <input type="text" class="form-control" 
                    name="telefone" id="telefone"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="curso" class="form-label">
                    Informe o curso:
                </label>
                <input type="text" class="form-control" 
                    name="curso" id="curso"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="termo" class="form-label">
                    Informe o termo:
                </label>
                <input type="text" class="form-control" 
                    name="termo" id="termo"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="ra" class="form-label">
                    Informe o R.A.:
                </label>
                <input type="text" class="form-control" 
                    name="ra" id="ra"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-secondary">
                    Inserir
                </button>
            </div>
        </div>
        </div>
        </form>
<?php
    require '../src/View/Home/Footer.php';  