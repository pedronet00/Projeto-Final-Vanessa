<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <?php
    require '../src/View/Home/Header.php';
?>
    <div class="container">    
    <h1 class="mb-4">Processo Seletivo Membros Registrados</h1>     

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
    <div class="container">   
        <div class="row">
            <div class="col">
                <a href='/ProcessoSeletivoMembros/inserir' class="btn btn-secondary mb-3 mt-3">
                    Inserir
                </a>
            </div>
        </div>
    </div>
        <table class="table table-striped table-hover mt-3" id="tabela">
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
                        <a href="/ProcessoSeletivoMembros/alterar/<?= $c["id"] ?>" class="btn btn-outline-warning">Alterar</a>
                        <a href="/ProcessoSeletivoMembros/excluir/<?= $c["id"] ?>" class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
      var table = new DataTable('#tabela', {
          language: {
              url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json'
          },
      });
    </script>
 <?php
    require '../src/View/Home/Footer.php';
