<?php 

   include("../src/View/Header.php");

   ?>
   
   <div class="container">
   <h1>Alterar depoimento</h1>
   
   <form method="post" action="/depoimento/editar/<?=$resultado['id']?>">
        <div class="row">
            <div class="col">
                <label for="depoimento" class="form-label">
                    Informe o nome:
                </label>
                <input type="text" class="form-control" 
                    name="nome" id="nome"
                    value="<?=$resultado['nome']?>"/>

                    <label for="depoimento" class="form-label">
                    Informe o curso:
                </label>
                <input type="text" class="form-control" 
                    name="curso" id="curso"
                    value="<?=$resultado['curso']?>"/>

                    <label for="depoimento" class="form-label">
                    Informe o ano de conclusão:
                </label>
                <input type="text" class="form-control" 
                    name="ano_conclusao" id="ano_conclusao"
                    value="<?=$resultado['ano_formatura']?>"/>

                    <label for="depoimento" class="form-label">
                    Informe o depoimento:
                </label>
                <textarea class="form-control" id="depoimento" name="depoimento" rows="3"><?=$resultado['depoimento']?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-secondary mt-3 mb-3">
                    Salvar Alterações
                </button>
            </div>
        </div>
    </form>
</div>
<?php 

include("../src/View/Footer.php");

?>