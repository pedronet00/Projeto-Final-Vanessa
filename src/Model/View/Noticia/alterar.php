<h1>Nova Categoria</h1>

<form method="post" action="/noticia/editar/<?= $resultado['id'] ?>">
    <div class="formulario" style="width: 50%; margin: 5% auto;">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" placeholder="Insira aqui o título">
        </div>
        <div class="mb-3">
            <label for="usuario_id" class="form-label">Código do usuário</label>
            <textarea class="form-control" id="usuario_id" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">Hora</label>
            <textarea class="form-control" id="hora" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="texto" class="form-label">Texto</label>
            <textarea class="form-control" id="texto" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">Hora</label>
            <textarea class="form-control" id="hora" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="data_noticia" class="form-label">Data da noticia</label>
            <textarea class="form-control" id="data_noticia" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">imagem</label>
            <textarea class="form-control" id="imagem" rows="3"></textarea>
        </div>
    </div>
</form>