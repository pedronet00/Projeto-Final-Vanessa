<?php 

   include("../src/View/Header.php");

   ?>

    <div class="container">
   <h1>Depoimentos Registrados</h1>
    <?php
    
    if(isset($_SESSION['gravar'])){
        if($_SESSION['gravar'])
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Registro gravado com sucesso!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        else
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Erro ao gravar registro, verifique!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            unset($_SESSION['gravar']);
    }

    if(isset($_SESSION['editar'])){
        if($_SESSION['editar'])
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Registro editado com sucesso!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        else
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Erro ao editar registro, verifique!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            unset($_SESSION['editar']);
    }

    if(isset($_SESSION['deletar'])){
        if($_SESSION['deletar'])
        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
        Registro deletado!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        else
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Erro ao deletar registro, verifique!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            unset($_SESSION['deletar']);
    }
    ?>
      <div class="row">
            <div class="col">
                <a href="/depoimento/inserir"class="btn btn-secondary mb-3">
                    Inserir novo Registro
                </a>
            </div>
        </div>
        <table class="table table-striped table-hover" id="tabela">
            <thead class="table-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Ano de conclusão</th>
                    <th scope="col">Ação</th>
                    
            
                </tr>
            </thead>
            <tbody>
                <?php

                while($c = $resultado->fetch(PDO::FETCH_ASSOC)){

                ?>
                <tr>
                    <th scope="row"><?=$c["id"]?></th>
                    <td><?=$c["nome"]?></td>
                    <td><?=$c["curso"]?></td>
                    <td><?=$c["ano_formatura"]?></td>
                    <td>
                        <a href="/depoimento/alterar/<?=$c["id"]?>" class="btn btn-outline-warning">Alterar</a>
                        <a href="/depoimento/excluir/<?=$c["id"]?>"class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>
               <?php } ?>
            </tbody>
            </table>


    </div>

   <?php 

    include("../src/View/Footer.php");

?>