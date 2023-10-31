<?php require '../src/View/Header.php'; ?>

<h1>Excluir Notícia</h1>

<form method="post" action="/noticia/deletar/<?=$resultado['id']?>">
    <div class="row">
        <div class="col">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="<?=$resultado['titulo']?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="usuario_id" class="form-label">ID do Usuário:</label>
            <input type="text" class="form-control" name="usuario_id" id="usuario_id" value="<?=$resultado['usuario_id']?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="data_noticia" class="form-label">Data da Notícia:</label>
            <input type="date" class="form-control" name="data_noticia" id="data_noticia" value="<?=$resultado['data_noticia']?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="hora" class="form-label">Hora:</label>
            <input type="time" class="form-control" name="hora" id="hora" value="<?=$resultado['hora']?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="texto" class="form-label">Texto:</label>
            <textarea class="form-control" name="texto" id="texto" rows="5" disabled><?=$resultado['texto']?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="imagem" class="form-label">URL da Imagem:</label>
            <input type="text" class="form-control" name="imagem" id="imagem" value="<?=$resultado['imagem']?>" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class="text-danger">Deseja realmente excluir?</h5>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
</form>

<?php require '../src/View/Footer.php'; ?>
