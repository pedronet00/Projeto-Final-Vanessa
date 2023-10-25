
  <?php
  require '../src/View/Header.php';
  ?>
<h1>Nova Categoria</h1>

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
                    Informe o usuario_id:
                </label>
                <input type="text" class="form-control" 
                    name="usuario_id" id="usuario_idtulo"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="data_noticia" class="form-label">
                    Informe o usuario_id:
                </label>
                <input type="text" class="form-control" 
                    name="data_noticia" id="data_noticia"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="hora" class="form-label">
                    Informe o hora:
                </label>
                <input type="text" class="form-control" 
                    name="hora" id="hora"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="texto" class="form-label">
                    Informe o hora:
                </label>
                <input type="texto" class="form-control" 
                    name="hora" id="texto"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="imagem;" class="form-label">
                    Selecione a imagem:
                </label>
                <input type="imagem" class="form-control" 
                    name="hora" id="imagem"/>
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
  require '../src/View/Footer.php';