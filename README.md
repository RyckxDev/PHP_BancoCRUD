# 🗄️ PHP BancoCRUD

> Sistema de gerenciamento de produtos com operações CRUD completas, desenvolvido em PHP com integração a banco de dados MySQL.

---

## 📌 Sobre o Projeto

Aplicação web para cadastro e gerenciamento de produtos, permitindo realizar as quatro operações fundamentais de um banco de dados: **Criar, Ler, Atualizar e Deletar** (CRUD). O projeto simula o funcionamento de uma loja com listagem e administração de produtos.

---

## 🛠️ Tecnologias Utilizadas

- **PHP** — Lógica de servidor e integração com banco de dados
- **MySQL** — Banco de dados relacional
- **CSS3** — Estilização das páginas

---

## 📁 Estrutura do Projeto

```
PHP_BancoCRUD/
├── index.php        # Página inicial / listagem de registros
├── loja.php         # Página da loja com exibição de produtos
├── produtos.php     # Gerenciamento de produtos
├── insert.php       # Inserção de novos registros
├── editar.php       # Formulário de edição de registros
├── update.php       # Atualização de registros no banco
├── delete.php       # Remoção de registros
├── conexao.php      # Configuração da conexão com o banco de dados
└── style.css        # Estilos globais
```

---

## ⚙️ Pré-requisitos

- PHP 7.4+
- MySQL 5.7+ (ou MariaDB)
- Servidor local: [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/) ou similar

---

## 🚀 Como Rodar Localmente

1. Clone o repositório dentro da pasta do seu servidor local (ex: `htdocs` no XAMPP):
   ```bash
   git clone https://github.com/RyckxDev/PHP_BancoCRUD.git
   ```

2. Crie um banco de dados MySQL e importe a estrutura necessária.

3. Configure a conexão em `conexao.php` com suas credenciais:
   ```php
   $host = "localhost";
   $usuario = "root";
   $senha = "";
   $banco = "nome_do_banco";
   ```

4. Inicie o servidor local e acesse no navegador:
   ```
   http://localhost/PHP_BancoCRUD/
   ```

---

## ✨ Funcionalidades

- Listagem de produtos cadastrados
- Cadastro de novos produtos
- Edição de registros existentes
- Remoção de registros
- Página de loja para visualização dos produtos

---

## 👨‍💻 Autor

Desenvolvido por [RyckxDev](https://github.com/RyckxDev).
