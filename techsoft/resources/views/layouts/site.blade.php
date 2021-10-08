<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- metatags -->
    <link rel="canonical" href="http://www.nome_do_seu_site.com.br" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="title" content="Techsoft - E-commerce de eletrônicos" />
    <meta name="DC.title" content="Techsoft - E-commerce de eletrônicos" />
    <meta property="og:title" content="Techsoft - E-commerce de eletrônicos" />
    <meta property="og:url" content="http://URLAQUI.com.br/" />
    <meta property="og:type" content="website" />
    <meta name="description" content="DESCRIÇÃO DA PAGINA AQUI" />
    <meta itemprop="description" content="DESCRIÇÃO DA PAGINA AQUI" />
    <meta property="og:description" content="DESCRIÇÃO DA PAGINA AQUI" />
    <!-- 600X315 -->
    <meta
      itemprop="image"
      content="https://ganovais.github.io/techsoft/assets/images/meta.png"
    />
    <meta
      property="og:image"
      content="https://ganovais.github.io/techsoft/assets/images/meta.png"
    />

    <title>Techsoft - E-commerce de eletrônicos</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{ asset('site/assets/css/styles.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="{{ asset('site/assets/plugins/fontawesome-free-5.15.3-web/css/all.min.css') }}"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg header-menu navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">TechSoft</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="produtos.html">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.html">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="carrinho.html">
                <i class="fas fa-shopping-cart mt-1"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
