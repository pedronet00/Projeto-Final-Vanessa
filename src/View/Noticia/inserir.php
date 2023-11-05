<?php
require '../src/View/Header.php';
?>

<div class="container">
<h1>Nova Notícia</h1>
    <form method="post" enctype="multipart/form-data" action="/noticia/gravar">
    <input type="hidden" class="form-control" name="usuario_id" id="usuario_id" value="1" />
        <div class="row">
            <div class="col">
                <label for="titulo" class="form-label">
                    Informe o título:
                </label>
                <input type="text" class="form-control" name="titulo" id="titulo" require />
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <label for="data_noticia" class="form-label">
                    Informe a data da notícia:
                </label>
                <input type="date" class="form-control" name="data_noticia" id="data_noticia" value="<?php echo date('Y-m-d'); ?>" require/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="hora" class="form-label">
                    Informe a hora:
                </label>
                <input type="time" class="form-control" name="hora" id="hora" value="<?php echo date('h:i'); ?>" require />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="texto" class="form-label">
                    Informe o texto da notícia:
                </label>
                <textarea class="form-control" name="texto" id="texto" require></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="imagem" class="form-label">
                    Selecione a imagem:
                </label>
                <input type="file" class="form-control" name="imagem" id="imagem" require/>
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
</div>
<?php
require '../src/View/Footer.php';
?>