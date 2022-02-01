<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>

<body>

<h1>Cadastrar Usuário</h1>
<form method="POST" action="cadastrar_action.php">
    <label>
        Nome: <input type="text" name="nome"/><br><p>
    </label>
    <label>
        Email: <input type="email" name="email"/><br><p>
    </label>

 <!-- Cadastro da senha -->
    <form id="formCadastro" name="formCadastro" action="controllers/controller_cadastro.php" method="post">
        Senha: <input type="password" id="senha"  name="senha"><br><p>  
        Confirme a senha: <input type="password" id="confsenha"  name="confsenha"><br><p> 
        <input type="submit" value="Salvar"><br><p> 
    </form> 

<!-- Verificação de Senha -->
    <form id="formVerificacao" name="formVerificacao" action="controllers/controller_login.php" method="post">
        Senha: <input type="password" id="senha2"  name="senha2">  
        <input type="submit" value="Validar"> 
    </form> 

</form>

<script src="lib/zepto.min.js"></script>
<script src="lib/javascript.js"></script>

</body>
</html>


