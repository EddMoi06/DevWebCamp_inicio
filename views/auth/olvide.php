<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php'
    ?>

    <form method="post" action="/olvide" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">E-mail</label>
            <input type="email" class="formulario__input" id="email" name="email" placeholder="Ej: correo@correo.com">
        </div>

        <input type="submit" class="formulario__submit" value="Enviar Instrucciones">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
    </div>
</main>