<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php'
    ?>

    <?php if($token_valido) {?>
    <form method="post" class="formulario">
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Nueva Contraseña</label>
            <input type="password" class="formulario__input" id="password" name="password" placeholder="Nueva contraseña...">
        </div>

        <input type="submit" class="formulario__submit" value="Guardar Cambios">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
    </div>
    <?php } ?>

</main>