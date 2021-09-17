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

<?php startblock('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#register').onsubmit = (e) => {
            e.preventDefault();
            const data = {
                email: document.querySelector('#email').value,
                password: document.querySelector('#password').value,
            }


            if(!data.email) {
                toastr.warning('Informe seu e-mail para continuar.')
                return false;
            }

            if(!data.password) {
                toastr.warning('Informe uma senha para continuar.');
                return false;
            } else if(data.password.length < 6) {
                toastr.warning('Informe uma senha com 6 ou mais caracteres.');
                return false;
            }

            fetch('/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(response => response.json())
            .then(data => {
                if(!data.error && data.user) {
                    window.location.href = '/atendimento';
                } else {
                    toastr.warning('Usuário e/ou senha incorretos.');
                }
            })

            return false;
        }
    })
</script>
<?php endblock(); ?>