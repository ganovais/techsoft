<?php require("./views/site/base.php") ?>

<?php startblock('content') ?>

<div class="df">
    <div class="col-12 col-md-6 center">
        <h1 class="text-center mb-2">Atendimento ao cliente</h1>
        <h3 class="text-center mb-2">
            Bem vindo, <?= $_SESSION['usuario'] ?>
        </h3>
        <form class="card" id="register_attendance" autocomplete="off">
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


<?php startblock('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('#register_attendance').onsubmit = (e) => {
            e.preventDefault();
            const data = {
                title: document.querySelector('#title').value,
                text: document.querySelector('#text').value,
            }

            if (!data.title) {
                toastr.warning('Informe o título para continuar!');
                return false;
            }

            if (!data.text) {
                toastr.warning('Informe a descrição para continuar!');
                return false;
            }
            document.querySelector('#enviar').innerHTML = 'Enviando';
            document.querySelector('#button_send').disabled = true;
            document.querySelector('#button_send').style.backgroundColor = '#ca8935';
            try {
                fetch('/atendimento', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                }).then(response => response.json())
                .then(data => {
                    if (!data.error) {
                        window.location.href = '/mensagem'
                    } else {
                        document.querySelector('#enviar').innerHTML = 'Enviar';
                        document.querySelector('#button_send').disabled = false;
                        document.querySelector('#button_send').style.backgroundColor = '#FF9000';
                    }
                })
            } catch (error) {
                document.querySelector('#enviar').innerHTML = 'Enviar';
                document.querySelector('#button_send').disabled = false;
                document.querySelector('#button_send').style.backgroundColor = '#FF9000';
            }
            
            return false;
        }
    })
</script>
<?php endblock(); ?>