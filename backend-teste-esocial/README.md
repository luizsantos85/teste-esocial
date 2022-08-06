# Back-end do Projeto Teste E-Social

Projeto desenvolvido para dar suporte de back-end da avaliação técnica.

Tecnologias utilizadas:

-   **[Docker:20.10.17](https://www.docker.com/)**
-   **[nginx:alpine]**
-   **[mysql:5.7.22](https://www.mysql.com/)**
-   **[redis]**
-   **[Laravel:9](https://laravel.com/)**
-   **[PHP:8.0\*](https://www.php.net/manual/pt_BR/index.php)**

## Pré-requisitos

```bash
** Necessário ter docker instalado.
```

## Instalação do Back-end

```bash

**observar as configurações de portas e usuario no arquivo docker-composer.yml

**Copiar o .env.example e gerar o .env, fazer as modificações das portas (se necessário)
e usuario do DB

**será criada uma pasta .docker/mysql para os arquivos de banco de dados ao inicializar os containers

**Inicializar os containers
$ docker compose up -d

**Acessar o container docker do laravel
$ docker compose exec app bash

**Instalar os packages do laravel
$ composer install

**Gerar a key do laravel
$ php artisan key:generate

**acessar localhost:8000/ping para verificar se o sistema esta rodando

**rodar as migrations para gerar as tabelas do banco de dados
$ php artisan migrate

**Parar os containers docker
$ docker compose down

```

## Rotas

```bash
* GET('localhost:8000/domains/');
* GET('localhost:8000/domain/id');
* POST('localhost:8000/domain/');
* PUT('localhost:8000/domain/id');
* DELETE('localhost:8000/domain/id');
```
