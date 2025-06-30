# ACL Laravel App

Sistema de autenticação com controle de permissões baseado em papéis (ACL) usando Laravel 11, Breeze e Spatie Laravel-Permission.

## Requisitos

- PHP >= 8.2
- MySQL ou MariaDB
- Composer
- Node.js + NPM
- Git

## Instalação

```bash
git clone https://github.com/luizbuhrer/acl-laravel-app.git
cd acl-laravel-app

# Instale as dependências
composer install
npm install && npm run build

# Copie o .env e configure o banco de dados
cp .env.example .env

# Configure o banco de dados no .env
DB_DATABASE=acl_db
DB_USERNAME=root
DB_PASSWORD=secret

# Entrar no arquivo para usar o artisan
cd acl-laravel-app

# Gere a chave da aplicação
php artisan key:generate

# Rode as migrations e seeders
php artisan migrate --seed

#Isso irá criar um usuário administrador:
Email: admin@example.com

Senha: password

# Acesso
A aplicação tem dois tipos de usuários:

admin → Acesso às rotas de gestão de usuários e permissões
# admin@example.com
# password

user → Acesso às rotas de produtos, categorias e marcas
# user@example.com
# password

# Inicie o servidor local
php artisan serve

