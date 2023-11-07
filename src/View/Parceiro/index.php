<?php
    require '../src/View/Header.php';
?>
    
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />    
<div class="container mt-12">

        <table class="table table-striped table-hover" id="tabela">
            <thead class="table-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>            
            <tbody>

            <?php
                while($c = $resultado->fetch(PDO::FETCH_ASSOC)){

                    ?>
                <tr>
                    <th><?= $c["id"] ?></th>
                    <td><?= $c["nome"] ?></td>
                    <td><?= $c["descricao"] ?></td>
                    <td><img src="/<?=$c['imagem']?>" height="60" width="60"/></td>
                    <td>
                        <!--<a href="/Parceiro/alterar/<?= $c["id"] ?>" class="btn btn-outline-warning">Alterar</a>-->
                        <a href="/Parceiro/excluir/<?= $c["id"] ?>" class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>
                    <?php } ?>
                
            </tbody>
            </table>

<?php

    if (isset($_SESSION['gravar'])){
        if ($_SESSION['gravar'])
            echo '<div class="alert alert-sucess alert-dismissible fade show" role="alert">
                    Registro Gravado com sucesso!
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
            echo '<div class="alert alert-sucess alert-dismissible fade show" role="alert">
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
                    Registro excluído com sucesso!
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

    require '../src/View/Footer.php';