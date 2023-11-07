<?php
    require '../src/View/Home/Header.php';
?><div class="container">
        <h1 class="mt-3">Nova candidatura - Membro</h1>
        
        <form method="post" action="/ProcessoSeletivoMembros/novoMembro">
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
                <input type="email" class="form-control" 
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
                <input type="number" class="form-control" 
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
                <button type="submit" class="btn btn-secondary mt-5 mb-5">
                    Inserir
                </button>
            </div>
        </div>
        </div>
        </form>
<?php
    require '../src/View/Home/Footer.php';  