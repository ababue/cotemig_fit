<?php
require ('conexao.php');

if (isset($_GET["idAluno"])) {
    $id = $_GET["idAluno"];

    // Função para listar todos os registros do banco de dados
    function listarRegistros($conexao, $id) {
        $sql = "SELECT * FROM alunos WHERE idAluno = $id";
        $stmt = $conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($conexao, $id);
        foreach ($registros as $registro) {
            if ($registro['idAluno'] == $id) {
                $aux = true;
            }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Aluno</title>
</head>
<body>
    <h1>Editar Aluno</h1>
        <?php if (isset($aux)) : ?>
        <form action="update.php" method="post">
            <input type="hidden" name="idAluno" value="<?php echo $registro['idAluno']; ?>">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $registro['nome']; ?>" required>
            <br>
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $registro['email']; ?>" required>
            <br>
            <label>Sexo:</label>
            <input type="text" name="sexo" value="<?php echo $registro['sexo']; ?>" required>
            <br>
            <br>
            <label>Endereço:</label>
            <input type="text" name="endereco" value="<?php echo $registro['endereco']; ?>" required>
            <br>
            <br>
            <label>numero:</label>
            <input type="text" name="numero" value="<?php echo $registro['numero']; ?>" required>
            <br>
            <br>
            <label>complemento:</label>
            <input type="text" name="complemento" value="<?php echo $registro['complemento']; ?>" required>
            <br>
            <br>
            <label>bairro:</label>
            <input type="text" name="bairro" value="<?php echo $registro['bairro']; ?>" required>
            <br>
            <br>
            <label>Cidade:</label>
            <input type="text" name="cidade" value="<?php echo $registro['cidade']; ?>" required>
            <br>
            <br>
            <label>UF:</label>
            <input type="text" name="estado" value="<?php echo $registro['uf']; ?>" required>
            <br>
            <br>
            <label>Modalidade:</label>
            <input type="text" name="modalidade" value="<?php echo $registro['modalidade']; ?>" required>
            <br>
            <input type="submit" value="Salvar">
        </form>
    <?php else : ?>
        <p>Aluno não encontrado.</p>
    <?php endif; ?>
</body>
</html>