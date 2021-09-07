## Rodando nossa API  

Para rodar nossa API, precisamos baixar algumas dependências e rodar alguns comandos:  
    - Baixar o NodeJs: https://nodejs.org/en/download/  
    Quando baixar o nodeJs, vamos abrir o terminal e rodar **npm -v**,  
    esse comando vai mostrar a versão do npm, um gerenciador de bibliotecas JS e confirmar que deu tudo certo.  

    - O yarn faz a mesma coisa que o NPM, porém ele é mais rápido e compacto.  
    - Baixar o Yarn: **npm install -g yarn**  
    Esse comando instala o yarn de forma global(-g) na sua máquina, possibilitando usa-ló em qualquer projeto  

    - Com o yarn configurado, acessamos a pasta blogs, nossa aplicação em JS, nela você encontra um arquivo **package.json**.  
    Nesse arquivo encontramos algumas configurações do projeto e as dependências(bibliotecas de terceiros) necessárias para rodar.  

    - Quando acessar a pasta blogs no terminal(**cd {{diretório}}**), rodar **yarn install**  
        - Esse comando vai baixar todos os pacotes necessários para rodar nossa aplicação  

    - E por último, para executar o projeto: **yarn dev:server**  