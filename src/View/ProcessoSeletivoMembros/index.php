    <?php
    require '../src/View/Home/Header.php';
?>
    <div class="container">    
    <h1>Processo Seletivo Membros Registrados</h1>
    <div class="container">   
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-secondary">
                    Inserir
                </button>
            </div>
        </div>
    </div>
        
    <?php
        if (isset($_SESSION['gravar'])){
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

        if (isset($_SESSION['editar'])){
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

        if (isset($_SESSION['deletar'])){
            if ($_SESSION['deletar'])
                echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                        Registro excluído
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

        
        <table class="table table-striped table-hover" id="tabela">
            <thead class="table-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($c = $resultado->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td><?= $c["id"] ?></td>
                    <td><?= $c["nome"] ?></td>
                    <td><?= $c["email"] ?></td>
                    <td><?= $c["curso"] ?></td>
                    <td>
                        <a href="/ProcessoSeletivoConsultores/alterar/<?= $c["id"] ?>" class="btn btn-outline-warning">Alterar</a>
                        <a href="/ProcessoSeletivoConsultores/excluir/<?= $c["id"] ?>" class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>

<?php
    require '../src/View/Home/Footer.php';
