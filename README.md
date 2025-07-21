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
git clone https://github.com/gutembergsa/smartbiim-api.git
cd smartbiim-api
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

8. **Inicie o servidor NodeJS:**

```bash
npm run dev
```

8. **Inicie o servidor Laravel:**

```bash
php artisan serve
```

9. **Inicie o MYSQL e o APACHE no Xampp e acesse http://127.0.0.1:8000**

## 🧐 Observações

Como esse teste pediu um CRUD completo foi necessário improvisar algumas telas como listagem de ativos, e fluxos como criar e editar ativos, a tela disponibilizada no figma foi essa [aqui](https://www.figma.com/design/y6r0zw2ZNd6AnyrEWCLBop/Projeto-Teste?node-id=4034-10422&t=WDNVuVjVnf3muxNK-0) e com base na tela fornecida foram criados os fluxos e telas adicionais.

Também improvisei uma lista para listagem de ativos com base no material encontrado [aqui](https://www.figma.com/design/y6r0zw2ZNd6AnyrEWCLBop/Projeto-Teste?node-id=3729-3467&t=2jNSv1ndcDcazJA7-0)

Para melhor avaliação do design recomendo a tela de update: http://127.0.0.1:8000/1/update

A descrição detalhada do teste recebido: https://github.com/gutembergsa/smartbiim-api/blob/main/INSTRUCTION.md

Uma api também esta disponível em http://127.0.0.1:8000:
GET /resource
GET /resource/{id}
POST /resource
PUT /resource/{id}
DELETE /resource/{id}


