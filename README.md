# Techsoft  

## 1º Download  
    - XAMPP
    - https://www.apachefriends.org/download.html
        - Escolher versão 7.4 do PHP

## 2º Download  
    - Composer  
    - https://getcomposer.org/download/  

## Instalando Laravel e Criando Projeto  
    - composer global require laravel/installer  
    - composer create-project --prefer-dist laravel/laravel=^7.0 techsoft  
        - ^7.0 está se referindo a versão do laravel  

## Rodando Laravel  
    Dentro da pasta do projeto, cd C:\PATH_DO_PROJETO, é necessário rodar o seguinte comando para dar inicio na aplicação em seu navegador  
    - php artisan serve  
      
    Outro meio de ver a aplicação rodando é colocar o projeto dentro do htdocs do xampp  
        - cd C:\xampp\htdocs  
        - No navegador localhost/nome_projeto/public  
        - Ou criar virtualHost

## Resource Controller Laravel  
    Link da documentação
    - https://laravel.com/docs/7.x/controllers#resource-controllers            

## Criando Migrations  
    Dentro da pasta LARAVEL do projeto, vamos criar as migratins iniciais  
    - php artisan config:clear  
    - php artisan migrate:install  
    - php artisan migrate  

## Rodando Laravel baixado do GIT  
    - cd laravel(deretório do projeto)  
    - composer install  
    - criar arquivo .env  
    - php artisan key:generate  
    - php artisan serve  

## Login Laravel  
    Rodar os seguintes comandos  
    - composer require laravel/ui:^2.4  
    - php artisan ui vue --auth  


https://github.com/colorlibhq/AdminLTE
