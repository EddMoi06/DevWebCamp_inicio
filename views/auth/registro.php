<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php'
    ?>

    <form action="/registro" method="post" class="formulario">

        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input type="text" class="formulario__input" id="nombre" name="nombre" placeholder="Ej: Nombre..." value="<?php echo $usuario->nombre ?>">
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input type="text" class="formulario__input" id="apellido" name="apellido" placeholder="Ej: Apellido..." value="<?php echo $usuario->apellido ?>">
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">E-mail</label>
            <input type="email" class="formulario__input" id="email" name="email" placeholder="Ej: correo@correo.com" value="<?php echo $usuario->email ?>">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input type="password" class="formulario__input" id="password" name="password" placeholder="Contraseña...">
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Contraseña</label>
            <input type="password" class="formulario__input" id="password2" name="password2" placeholder="Repetir Contraseña...">
        </div>

        <input type="submit" class="formulario__submit" value="Crear Cuenta">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión</a>
    </div>
</main>