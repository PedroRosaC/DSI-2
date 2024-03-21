<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sass/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/LogoPedrohub.png" >
    <title>Entrar</title>
</head>
<body>
    <div class="container border">
        <h1>Criar conta</h1>
        <br>
        <form action="POST">
            <h3>Nome:</h3>
            <input type="text" class="input" name="nome" placeholder="Nome">
            <h3>E-mail:</h3>
            <input type="email" class="input" name="email" placeholder="E-mail">
            <h3>Senha:</h3>
            <input type="text" class="input" name="senha" placeholder="Senha">
            <h3>Data de Nascimento:</h3>
            <input type="date" class="input" name="data_nascimento">
            <input type="submit" value="submit" class="submit border">
        </form>
    </div>
</body>
</html>