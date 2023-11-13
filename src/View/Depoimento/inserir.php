<?php

include("../src/View/Header.php");

?>
<div class="container">


    <h1>Inserir Depoimento</h1>

    <form method="post" action="/depoimento/gravar">
        <div class="row">
            <div class="col">
                <label for="depoimento" class="form-label">
                    Informe o nome:
                </label>
                <input type="text" class="form-control" name="nome" id="nome" required/>

                <label for="depoimento" class="form-label">
                    Informe o curso:
                </label>
                <input type="text" class="form-control" name="curso" id="curso" required/>

                <label for="ano_formatura" class="form-label">
                    Informe o ano de conclusão:
                </label>
                <input type="number" class="form-control" name="ano_formatura" id="ano_formatura" required/>

                <label for="depoimento" class="form-label">
                    Informe o depoimento:
                </label>
                <textarea class="form-control" id="depoimento" name="depoimento" rows="3" required ></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-secondary mt-3 mb-3">
                    Inserir
                </button>
            </div>
        </div>
    </form>
</div>
<?php

include("../src/View/Footer.php");

?>