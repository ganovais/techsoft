<?php require('./views/site/base.php') ?>

<?php startblock('content'); ?>
<div class="df">
    <div class="col-12 col-md-6 center">
        <h1 class="text-center mb-5">
            Atendimento ao Cliente
        </h1>
        <h3 class="text-center mb-5">
            Login
        </h3>

        <form class="card" id="login" autocomplete="off">
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" id="email" class="my-input" placeholder="E-mail" />
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="my-input" id="password" placeholder="Senha" />
            </div>

            <button type="submit" class="btn-theme">
                Entrar <i class="fas fa-paper-plane"></i>
            </button>
            <a class="mt-3 text-center" href="/cadastrar">
                <i class="fas fa-user-plus"></i>
                Registrar-se
            </a>

        </form>

    </div>
</div>
<?php endblock(); ?>