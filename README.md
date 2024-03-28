# Sistema de produtos

Sistema simples de cadastro de produto que permite aos usuários manipular informações de produtos fictícios cadastrados em um banco de dados, desenvolvido para a matéria de programação WEB para trabalhar as quatro operações básicas de armazenamento persistente  (CRUD) 

## Visão Geral

Este projeto consiste em duas partes principais:

1. **Formulário de Cadastro de Produtos:** Um formulário para cadastrar novos produtos no banco de dados.
2. **Listagem de Produtos:** Uma página para pesquisar e exibir produtos cadastrados no banco de dados.
2. **Atualização de Produtos:** Uma página para atualizar os dados produtos cadastrados.
2. **Exclusão de Produtos:** Uma página para excluir produtos cadastrados com base no ID.

## Funcionalidades

- **Cadastro de Produtos:** Os usuários podem preencher um formulário com informações sobre um novo produto, incluindo código, nome, quantidade, valor e data de compra. Os dados são enviados para o banco de dados ao clicar no botão "Cadastrar".

- **Pesquisa de Produtos:** Os usuários podem pesquisar produtos cadastrados no banco de dados com base no nome, valor e data de compra. Os resultados da pesquisa são exibidos em uma tabela.

- **Atualização de Produtos:** Os usuários podem atualizar as informações de um produto cadastrado no banco de dados, incluindo nome, quantidade, valor e data de compra.

- **Exclusão de Produtos:** Os usuários podem excluir um produto cadastrado no banco de dados.


## Tecnologias Utilizadas

- HTML5
- CSS3
- PHP
- MySQL
- XAMPP

## Estrutura do Projeto

```
├── index.html                # Página inicial com as opções de operação dos dados
├── produto.php               # Página de cadastro de produtos
├── produtolst.php            # Página de listagem de produtos
├── produtoup.php             # Página de atualização de produtos
├── produtodel.php            # Página de exclusão de produtos
├── styles
│   ├── produto.css           # Arquivo de estilos CSS específico para a página de cadastro de produtos
│   ├── produtolst.css        # Arquivo de estilos CSS específico para a página de listagem de produtos
│   ├── produtoup.css         # Arquivo de estilos CSS específico para a página de atualização de produtos
│   └── produtodek.css        # Arquivo de estilos CSS específico para a página de exclusão de produtos
├── config.php                # Arquivo de configuração para conexão com o banco de dados
├── produto.txt               # Arquivo com o código para criação da tabela no banco de dados
└── README.md                 # Este arquivo de documentação

```

## Como Usar

1. Clone este repositório para o seu ambiente de desenvolvimento local.
2. Configure a conexão com o banco de dados editando o arquivo `config.php` com as informações de acesso corretas.
3. Abra o arquivo `index.html` no seu navegador para acessar as opções disponíveis no sistema.
4. Abra o arquivo  `produto.php` para acessar o formulário de cadastro de produtos
5. Preencha o formulário e clique em "Cadastrar" para adicionar um novo produto ao banco de dados.
6. Abra o arquivo `produtolst.php` no seu navegador para acessar a página de listagem de produtos.
7. Utilize os campos de pesquisa para filtrar os produtos cadastrados.
8. Abra o arquivo `produtoup.php` no seu navegador para acessar a página de atualização de produtos.
9. Digite o ID do produto e as informações que deseja atualizar.
10. Abra o arquivo `produtodel.php` no seu navegador para acessar a página de exclusão de produtos.
11. Digite o ID do produto e as informações que deseja excluir.

