<?php
require '../src/View/Header.php';
?>
<body>
    <div class="formulario" style="width: 50%; margin: 5% auto;">
        <form method="POST">
            <div class="mb-3">
                <label for="formName" class="form-label">Nome</label>
                <input type="text" class="form-control" id="formName" name="nome" placeholder="Insira o nome">
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
        </form>
    </div>
</body>
</html>
<?php
require '../src/View/Footer.php';
?>
