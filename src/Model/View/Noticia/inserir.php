
<h1>Nova Notícia</h1>

<form method="post" action="/noticia/gravar">
    <div class="row">
        <div class="col">
            <label for="titulo" class="form-label">
                Informe o título:
            </label>
            <input type="text" class="form-control" 
                name="titulo" id="titulo"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="usuario_id" class="form-label">
                Informe o ID do usuário:
            </label>
            <input type="text" class="form-control" 
                name="usuario_id" id="usuario_id"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="data_noticia" class="form-label">
                Informe a data da notícia:
            </label>
            <input type="date" class="form-control" 
                name="data_noticia" id="data_noticia"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="hora" class="form-label">
                Informe a hora:
            </label>
            <input type="time" class="form-control" 
                name="hora" id="hora"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="texto" class="form-label">
                Informe o texto da notícia:
            </label>
            <textarea class="form-control" 
                name="texto" id="texto"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="imagem" class="form-label">
                Selecione a imagem:
            </label>
            <input type="file" class="form-control" 
                name="imagem" id="imagem"/>
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


