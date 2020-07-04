<h2 align="center">
	Jobs
	<br>
</h2>

Sistema para cadastro de empresa e suas respectivas vagas.

<h1 align="center">
    <img alt="Starter" title="Javascript Starter"src="static/initial.jpg"  />
</h1>

<h1 align="center">
    <img alt="Starter" title="Javascript Starter"src="static/company-screen.jpg"  />
</h1>

## Execução 💻

> Subir todos os containers docker.
```
> docker-compose up -d 
```
> Crie arquivo .env dentro da pasta src.
```
> touch .env
```
> Entre no container php e rode os comandos.
```
> composer install
  chmod -R 777 storage/
  chmod -R 777 bootstrap/
  php artisan key:generate
  php artisan migrate
  php artisan storage:link
```

## Tecnologias usadas 🛠

- Back-end:
	- Laravel
  - MySQL
  - Seeds
  - Factories
- Front-end:
	- HTML
	- CSS
  - JavaScript
  - Bootstrap
  - Template Blade
