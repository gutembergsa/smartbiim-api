# 📦 Sistema de Gestão de Recursos

Este projeto é um sistema completo de **CRUD** desenvolvido com **Laravel 11**, utilizando **Livewire 3.x**, **Alpine.js**, **Tailwind CSS** e **Vite**. A aplicação oferece uma interface moderna, responsiva e reativa para gerenciar recursos, além de fornecer uma API RESTful para integração.

---

## 🚀 Tecnologias Utilizadas

- Laravel 11
- PHP 8.2+
- Livewire 3.x
- Alpine.js
- Tailwind CSS
- Vite
- MySQL (via XAMPP 3.0.3)

---

## 🧰 Pré-requisitos

Antes de começar, certifique-se de ter instalado:

- [PHP 8.2+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js & npm](https://nodejs.org/)
- [XAMPP 3.0.3](https://www.apachefriends.org/)
- [Git (opcional)](https://git-scm.com/)

---

## ⚙️ Instalação

1. **Clone o projeto:**

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
```

2. **Instale as dependências PHP:**

```bash
composer install
```

3. **Instale as dependências JS (Vite/Tailwind/Alpine):**

```bash
npm install
```

4. **Copie o conteudo de .env.example para o arquivo .env e configure o banco**

```bash
cp .env.example .env
```
```bash
DB_DATABASE=nome_do_banco
DB_USERNAME=root
DB_PASSWORD=
```

5. **Gere a chave da aplicação:**

```bash
php artisan key:generate
```

6. **Execute as migrations:**

```bash
php artisan migrate
```

7. **Execute as seeds:**

```bash
php artisan db:seed
```