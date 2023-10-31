<?php

include("../src/View/Header.php");

?>

<div class="container">

    <h1>Excluir Depoimento</h1>

    <form method="post" action="/depoimento/deletar/<?= $resultado['id'] ?>">
        <div class="row">
            <div class="col">
                <label for="depoimento" class="form-label">
                    Nome:
                </label>
                <input type="text" class="form-control" name="nome" id="nome" value="<?= $resultado['nome'] ?>" disabled />

                <label for="depoimento" class="form-label">
                    Informe o curso:
                </label>
                <input type="text" class="form-control" name="curso" id="curso" value="<?= $resultado['curso'] ?>"disabled />

                <label for="depoimento" class="form-label">
                    Informe o ano de conclusão:
                </label>
                <input type="text" class="form-control" name="ano_formatura" id="ano_formatura" value="<?= $resultado['ano_formatura'] ?>"disabled />

                <label for="depoimento" class="form-label">
                    Informe o depoimento:
                </label>
                <textarea class="form-control" id="depoimento" name="depoimento" rows="3" disabled></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="text-denger">

                    Deseja realmente excluir registro?

                </h5>
                <button type="submit" class="btn btn-danger">
                    Excluir
                </button>
            </div>
        </div>
                
    </form>
</div>
<?php

include("../src/View/Footer.php");

?>