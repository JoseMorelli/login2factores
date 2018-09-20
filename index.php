<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <H1>BIENVENIDO</H1>
        <p>Acceso al sistema</p>
        <form action="validarLogin.php"method="POST">
            Usuario: <input name="user" type="text" placeholder="USUARIO" />
            <br>
            Password: <input name="pass" type="password" placeholder="PASSWORD" />
            <br>
            <input name="enviar" type="submit" value="ENVIAR" />
        </form>
        <br>
        <a href="crearUsuario.php">Crear Nuevo Usuario</a>
    </body>
</html>