<?php
require '../src/View/Header.php';
?>
<div class="container">

    <h1>Notícia Registradas</h1>

    <?php
    if (isset($_SESSION['gravar'])) {
        if ($_SESSION['gravar'])
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Registro gravado com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        else
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Erro ao inserir o registro!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        unset($_SESSION['gravar']);
    }
    if (isset($_SESSION['editar'])) {
        if ($_SESSION['editar'])
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Registro alterado com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        else
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Erro ao alterar o registro!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        unset($_SESSION['editar']);
    }
    if (isset($_SESSION['deletar'])) {
        if ($_SESSION['deletar'])
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Registro excluido com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        else
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Erro ao excluir o registro!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        unset($_SESSION['deletar']);
    }
    ?>
    <div class="row">
        <div class="col">
            <a href="/noticia/inserir" class="btn btn-secondary mb-3">
                Inserir novo registro
            </a>
        </div>
    </div>
    <table class="table table-striped table-hover" id="tabela">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($c = $resultado->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <th scope="row"><?= $c["id"] ?></th>
                    <td><?= $c["titulo"] ?></td>
                    <td>

                        <a href="/noticia/alterar/<?= $c["id"] ?>" class="btn btn-outline-warning">Alterar</a>
                        <a href="/noticia/excluir/<?= $c["id"] ?>" class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
<?php
require '../src/View/Footer.php';
