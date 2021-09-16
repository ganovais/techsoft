<?php require("./views/site/base.php") ?>

<?php startblock('content'); ?>

<div class="df height-100vh">
    <div class="col-12 col-md-6 center">
        <h1 class="text-center mb-5">
            Atendimento ao Cliente
        </h1>
        <h3 class="text-center mb-5">
            Registrar
        </h3>

        <form class="card" id="register" autocomplete="off">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" id="name" class="my-input" placeholder="Nome" />
            </div>


            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" id="email" class="my-input" placeholder="E-mail" />
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="my-input" id="password" placeholder="Senha" />

                <p class="p_senha">
                    <i class="fas fa-info-circle"></i>
                    <i>Use 6 ou mais caracteres</i>
                </p>
            </div>

            <button type="submit" class="btn-theme">
                Registrar <i class="fas fa-save"></i>
            </button>
        </form>

        <a class="mt-3 text-center" href="/">
            <i class="fas fa-arrow-left"></i>
            voltar para login
        </a>

    </div>
</div>
<?php endblock(); ?>


<?php startblock('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#register').onsubmit = (e) => {
            e.preventDefault();
            const data = {
                name: document.querySelector('#name').value,
                email: document.querySelector('#email').value,
                password: document.querySelector('#password').value,
            }

            if(!data.name) {
                toastr.warning('Informe seu nome para continuar.');
                return false;
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

            fetch('/cadastrar', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringfy(data)
            }).then(response => response.json())
            .then(data => {
                if(!data.error) {
                    toastr.success('Usuário cadastrado com sucesso.');
                    setTimeout(() => {
                        window.location.href = '/';
                    }, 2000);
                } else {
                    toastr.warning(data.message);
                    document.querySelector('#email').value = '';
                }
            })

            return false;
        }
    })
</script>

<?php endblock(); ?>