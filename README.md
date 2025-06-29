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
git clone https://github.com/seu-usuario/acl-laravel-app.git
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

# Gere a chave da aplicação
php artisan key:generate

# Rode as migrations e seeders
php artisan migrate --seed

# Inicie o servidor local
php artisan serve

# Login 
Admin: admin@email.com / 12345678
Comum: comum@email.com / 12345678