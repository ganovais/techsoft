## Suporte ao cliente - PHP

### Configurar Virtual Host  
1 - C:\xampp\apache\conf\extra  
2 - Editar httpd-vhosts.conf com notepad++  
3 - Descomentar: NameVirtualHost *:80  
4 - Adicionar:  
    ```<VirtualHost *:80>
            DocumentRoot "C:/xampp/htdocs/suporte"
            ServerName suporte.soft
            ServerAlias suporte.soft
            <Directory "C:/xampp/htdocs/suporte">
                AllowOverride All
            </Directory>
        </VirtualHost>```

5 - Teclas: win + R  
6 - Colar: C:\Windows\System32\drivers\etc\hosts  
7 - Editar  
8 - Adicionar no final  
    127.0.0.1   suporte.soft
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <?php startblock('scripts'); ?>
    <?php endblock(); ?>
