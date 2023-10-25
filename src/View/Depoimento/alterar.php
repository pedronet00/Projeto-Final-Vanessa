<?php 

   include("../src/View/cabecalho.php");

   ?>
   
   <?php 

    include("../src/View/rodape.php");

   ?>
   <h1>Alterar depoimento</h1>
   
   <form method="post" action="/depoimento/editar/<?=$resultado['id']?>">
        <div class="row">
            <div class="col">
                <label for="depoimento" class="form-label">
                    Informe os dados:
                </label>
                <input type="text" class="form-control" 
                    name="depoimento" id="depoimento"
                    value="<?=$resultado['depoimento']?>"/>
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