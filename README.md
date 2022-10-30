# Loja virtual Yummy Doces

## Sobre o projeto

A loja virtual Yummy Doces foi um trabalho desenvolvido durante o 2º ano do curso técnico de informática no CTI Unesp, onde atuei no desenvolvimento das funcionalidades usando PHP puro junto com a classe de conexão PDO.

## Novidades

- Cadastro de usuários com integração da API Via Cep
- Usuários podem apenas realizar compras
- Administradores podem cadastrar, editar e inativar produtos
- Ícone do carrinho de compras com BADGE que exibe a quantidade de produtos adicionados
- Possibilidade de aumentar, diminuir ou excluir quantidade de um produto no carrinho de compras
- Estatísticas das vendas dos produtos

## Instalação

Instalar as dependencias do composer, executando o comando

```bash
$ composer update
```

Obs: Possui apenas o PHP dotenv para não exibir as senhas dentro do repositório

Rodar os scripts do arquivo `sql-ecommerce.sql` no banco de dados `PostgreSQL`

Criar o arquivo `.env` com as informações de conexão requeridas em `.env.example`

Habilitar as extensões `pdo_pgsql`, `pdo_sqlite`, `pgsql` no arquivo php.ini

## Usuários e senhas para teste

Os scripts adicionam 2 usuários de teste

| Usuário | Senha |
| ------ | ------ |
| admin | admin |
| usuario | usuario |