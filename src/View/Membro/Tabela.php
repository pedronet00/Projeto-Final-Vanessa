<?php
if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = $_POST['nome'];
    
    // Aqui você deve implementar a lógica de consulta no banco de dados
    // Substitua as variáveis a seguir com os valores reais do banco de dados
    $curso = "Curso do Usuário";
    $cargo = "Cargo do Usuário";
    $foto = "caminho/para/imagem.jpg";
    
    // Exibe os campos na tabela
    echo '<table class="table" style="width: 50%; margin: 5% auto;">
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Nome</td>
                <td>' . $nome . '</td>
            </tr>
            <tr>
                <td>Curso</td>
                <td>' . $curso . '</td>
            </tr>
            <tr>
                <td>Cargo</td>
                <td>' . $cargo . '</td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><img src="' . $foto . '" alt="Foto do Usuário" width="100"></td>
            </tr>
        </table>';
} else {
    // Formulário para o usuário inserir o nome
    echo '<form method="POST">
            <div class="mb-3">
                <label for="formName" class="form-label">Nome</label>
                <input type="text" class="form-control" id="formName" name="nome" placeholder="Insira o nome">
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
        </form>';
}
?>
