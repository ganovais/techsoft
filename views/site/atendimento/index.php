<?php require("./views/site/base.php") ?>

<?php startblock('content') ?>

<div class="df">
    <div class="col-12 col-md-6 center">
        <h1 class="text-center mb-2">Atendimento ao cliente</h1>
        <h3 class="text-center mb-2">
            Bem vindo, <?= $_SESSION['usuario'] ?>
        </h3>
        <form class="card" id="register_atendance" autocomplete="off">
            <div class="form-group">
                <label>Título</label>
                <input type="text" id="title" class="my-input" placeholder="Título" />
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <textarea class="my-input text-area" id="text" placeholder="Descrição"></textarea>
            </div>
            <button type='submit' id="button_send" class="btn-theme">
                <span id="enviar">Enviar</span>
                <i class="fas fa-paper-plane"></i>
            </button>
            <a class="mt-3 text-center" href="/logout">
                Sair <i class="fas fa-sign-out-alt"></i>
            </a>
        </form>
    </div>
</div>

<?php endblock() ?>