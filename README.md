<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Como utilizar

1 - Abra a pasta do projeto e rode o comando `docker-compose up -d` para iniciar o banco de dados (é necessário ter o Docker e o docker-compose instalados);

2 - Rode o comando `composer update` para instalar as dependências (é necessário ter o composer instalado), `php artisan serve` para iniciar a aplicação e `php artisan migrate` para rodar as migrations;

3 - Importe o arquivo `Desafio API.postman_collection.json` no Postman para usar as requests;

4 - Algumas rotas precisam de autorização, então, utilize a request `Register` do Postman para criar a conta e gerar o token;

5 - Utilize o token gerado na pasta principal dos requests do Postman:
![utilizando token no postman](https://github.com/teuspersi/desafio-api-php/blob/master/Screenshot%202021-09-23%20182742.png)

6 - Caso necessário, mude a porta dos requests de `8000`para a porta em que sua aplicação está rodando.
