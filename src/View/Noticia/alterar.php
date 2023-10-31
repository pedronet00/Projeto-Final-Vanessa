<?php require '../src/View/Header.php'; ?>


<div class="container">

    <h1>Alterar Notícia</h1>

    <form method="post" action="/noticia/editar/<?= $resultado['id'] ?>">
        <div class="row">
            <div class="col">
                <label for="titulo" class="form-label">Informe o título:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $resultado['titulo'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="usuario_id" class="form-label">Informe o ID do usuário:</label>
                <input type="text" class="form-control" name="usuario_id" id="usuario_id" value="<?= $resultado['usuario_id'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="data_noticia" class="form-label">Informe a data da notícia:</label>
                <input type="date" class="form-control" name="data_noticia" id="data_noticia" value="<?= $resultado['data_noticia'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="hora" class="form-label">Informe a hora da notícia:</label>
                <input type="time" class="form-control" name="hora" id="hora" value="<?= $resultado['hora'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="texto" class="form-label">Informe o texto da notícia:</label>
                <textarea class="form-control" name="texto" id="texto" rows="5"><?= $resultado['texto'] ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="imagem" class="form-label">Informe o URL da imagem:</label>
                <input type="text" class="form-control" name="imagem" id="imagem" value="<?= $resultado['imagem'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-secondary">Salvar Alterações</button>
            </div>
        </div>
    </form>

</div>
<?php require '../src/View/Footer.php'; ?>