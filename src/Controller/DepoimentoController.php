<?php
    namespace Php\Empresajrtoledo\Controller;

    use Php\Empresajrtoledo\Model\Entity\Depoimento;
    use Php\Empresajrtoledo\Model\DAO\DepoimentoDAO;
    class DepoimentoController{

        public function inserir(){
            require "../src/View/Depoimento/inserir.php";
        }

        public function alterar($params){
              //pega os dados para excluir e alterar
            $depoimentoDAO = new DepoimentoDAO();
            $id = $params[1];
            $resultado= $depoimentoDAO->consularPorId($id);  
            require "../src/View/Depoimento/alterar.php";
        }

        public function excluir($params){
             //pega os dados para excluir e alterar
             $depoimentoDAO = new DepoimentoDAO();
             $id = $params[1];
             $resultado= $depoimentoDAO->consularPorId($id);
            require "../src/View/Depoimento/excluir.php";
        }
      
        public function gravar(){
            $depoimento = new Depoimento('', $_POST['nome'], $_POST['curso'], $_POST['ano_formatura'], $_POST['depoimento']);
            $depoimentoDAO = new DepoimentoDAO();
            if($depoimentoDAO->inserir($depoimento)){
                $_SESSION['gravar']=true;

            }else{
                $_SESSION['gravar']=false;
            }
          $this->index();
        }

        public function editar($params){
            $depoimento = new Depoimento($params[1], $_POST['nome'], $_POST['curso'], $_POST['ano_conclusao'], $_POST['depoimento']);
            $depoimentoDAO = new DepoimentoDAO();
            session_start();
            if($depoimentoDAO->alterar($depoimento)){
                $_SESSION['editar']=true;

            }else{
                $_SESSION['editar']=false;
            }
          $this->index();
        }

        public function deletar($params){
            $depoimento = new Depoimento($params[1],'','','','');
            $depoimentoDAO = new DepoimentoDAO();
            session_start();
            if($depoimentoDAO->excluir($depoimento)){
                $_SESSION['deletar']=true;

            }else{
                $_SESSION['deletar']=false;
            }
          $this->index();
        }
        public function index(){
            $depoimentoDAO = new DepoimentoDAO();
            $resultado = $depoimentoDAO->consultar();
            require '../src/View/Depoimento/index.php';
    }
}
