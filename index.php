<?php 

if (isset($_FILES['imagem']))
{
    $uploaddir = 'c:/xampp/htdocs/silvana-user-profile/uploads/';
    $uploadfile = $uploaddir . basename($_FILES['imagem']['name']);
}
if (!empty($_POST))
{   //se, $_POST nao estiver vazio...

    $data = array();
    $data = [ 
    'nome' => $_POST['nome'],
    'apelido' => $_POST['apelido'], 
    'email' => $_POST['email'],
    'curso' => $_POST['curso'],
    'turma' => $_POST['turma'], 
    'disciplina' => $_POST['disciplina'],
    'cidade' => $_POST['cidade'],
    
            ];


}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Perfil de Usuário</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

<header>
    <!-- <img src="./img/logo.jpg" alt="imagem" class="logo"> -->
    <h2>Insira as informações para efetuar Cadastrar um perfil.</h2>
    <p>Seu cadastro Vai aparecer logo abaixo: </p>

</header>

<section class="form">

<form enctype="multipart/form-data" method="POST"	action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div>
<span> Nome: </span>      <input type="text" required size="35" maxlength="256" name="nome" value='<?php if (isset($data['nome'])){ echo $data['nome']; } ?>' >
<span> Apelido: </span>   <input type="text" required size="35" maxlength="256" name="apelido"  value='<?php if (isset($data['apelido'])){ echo $data['apelido']; } ?>'> 
</div>
<div>
E-mail:    <input type="text" required size="35" maxlength="256" name="email" value='<?php if (isset($data['email'])){ echo $data['email']; } ?>' >
Curso:	   <input type="text" required size="35" maxlength="256" name="curso">
</div>
<div>
Turma:	   <input type="text" required size="35" maxlength="256" name="turma">
Disciplina:<input type="text" required size="35" maxlength="256" name="disciplina">
</div>
<div>
Cidade:    <input type="text" required size="35" maxlength="256" name="cidade">
Envie este arquivo: <input type="file" name="imagem" > 
</div>

<?php
if (isset($_FILES['imagem']))
{
    echo "<img src='/silvana-user-profile/uploads/" . $_FILES['imagem']['name'] . "'>";
}

?>

<input type="submit" value="Efetuar Cadastro" name="enviar"> | <a href="index.php">Limpar</a>

</form>

</section> 


<footer>Com ❤ BAHIA</footer>

</body>
</html>