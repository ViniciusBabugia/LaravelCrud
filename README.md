<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre o Projeto

Projeto desenvolvido em Laravel com o objetivo de criar um CRUD de clientes buscando as informações da API ViaCep e preencher os dados de endereço, tendo por regra básica somente validar os campos: Nome, Gênero e Data de Nascimento e demonstrar as utilizações de recursos Laravel, JavaScript, CSS, HTML vinculado ao bootstrap.

## Instalação

1 - Realize o CLONE do projeto
<pre><code>   
git clone https://github.com/ViniciusBabugia/LaravelCrud.git
</code></pre>
2 - Mude para o diretório de trabalho   
<pre><code>   
cd project
</code></pre>
3 - Abra o código no editor, renomeie <code>.env.example</code> para <code>.env</code> e modifique as informações do banco de dados name, username, password de acordo com o que foi criado.
4 - Instale as dependencias do composer
<pre><code>   
composer install
</code></pre>
5 - Gere a chave de autenticação do Laravel
<pre><code>   
php artisan key:generate
</code></pre>
6 - Crie as informações do banco de dados
<pre><code>   
php artisan migrate
</code></pre>
7 - Rode o projeto pelo comando abaixo ou via ferramenta utilizada
<pre><code>   
php artisan serve
</code></pre>
8 - Link de acesso
<pre><code>   
http://sua_url/project/public/clients 
</code></pre>
Exemplo minha url
<pre><code>   
http://localhost:8081/crmall/project/public/clients
</code></pre>

