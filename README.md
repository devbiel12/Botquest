# 🤖 Botquest
## 📌 Descrição

O Botquest é uma aplicação web interativa voltada para aprendizado de tecnologia (HTML, CSS, JavaScript e outros conteúdos), utilizando uma abordagem dinâmica baseada em perguntas e respostas.

O sistema permite que usuários interajam com conteúdos educacionais, respondam questões e naveguem por diferentes temas de forma prática.

## 🎯 Escopo do Projeto
- 📚 Plataforma educacional interativa
- 🧠 Sistema de perguntas e respostas
- 🌐 Interface web com HTML, CSS e JavaScript
- 🐘 Backend em PHP
- 🗄️ Banco de dados MySQL
- 👤 Gerenciamento de usuários (cadastro, edição, exclusão)

## 🛠️ Tecnologias Utilizadas
- Frontend:
    - HTML5
    - CSS3
    - JavaScript
- Backend:
    - PHP
- Banco de Dados:
    - MySQL

## 📂 Estrutura do Projeto
``` txt
Botquest/
│
├── index.php
├── index.html
├── botquest.sql
│
├── css/
│   └── style.css
│
├── js/
│   └── script.js
│
├── php/
│   ├── conexao.php
│   ├── cadastro.php
│   ├── editar.php
│   ├── excluir.php
│   └── ...
│
├── html/
│   └── páginas de conteúdo/teste
│
├── textos/
│   └── arquivos com perguntas
│
└── img/
    └── imagens do sistema
``` 
## ⚙️ Como Executar o Projeto
🔹 Pré-requisitos

Antes de começar, você precisa ter instalado:

- XAMPP ou similar (WAMP, Laragon)
- PHP 7+
- MySQL

### 🔹 Passo a Passo
#### 1. 📥 Clonar ou baixar o projeto
``` bash
git clone https://github.com/devbiel12/Botquest.git 
```
ou extraia o .zip.
#### 2. 📁 Colocar na pasta do servidor

Coloque a pasta do projeto dentro de:
``` bash
C:\xampp\htdocs\
```
Exemplo:
``` bash
C:\xampp\htdocs\Botquest
```

#### 3. 🗄️ Importar o banco de dados
- Abra o phpMyAdmin
- Crie um banco de dados (ex: botquest)
- Clique em Importar
- Selecione o arquivo:
``` bash
botquest.sql
```

#### 4. 🔧 Configurar conexão com o banco

Abra o arquivo:
``` bash
php/conexao.php
```
E ajuste se necessário:
``` bash
$host = "localhost";
$user = "root";
$pass = "";
$db = "botquest";
```

#### 5. ▶️ Iniciar o servidor
- Abra o XAMPP
- Inicie:
    - Apache
    - MySQL
     
#### 6. 🌐 Acessar o sistema

No navegador, acesse:
``` bash
http://localhost/Botquest
```

## 🚀 Funcionalidades
- Cadastro de usuários
- Edição e exclusão de usuários
- Sistema de perguntas por temas
- Navegação por conteúdos educacionais
- Interface interativa

## 👨‍💻 Autor

Desenvolvido por Gabriel Farias

## 📄 Licença

Este projeto é de uso acadêmico/educacional.
