Gerenciamento de Domínio

<div align="center">

  #### [Tecnologias](#tecnologias) │ [Layout](#layout) │ [Funcionalidades](#funcionalidades) │ [Acesso](#acesso-ao-sistema)

</div>

> ## Tecnologias

As tecnologias abaixo foram utilizadas para o desenvolvimento do projeto: 

<img src="https://img.shields.io/static/v1?label=&message=PHP&color=black&style=for-the-badge&logo=PHP"/> <img src="https://img.shields.io/static/v1?label=&message=LARAVEL &color=black&style=for-the-badge&logo=LARAVEL"/>  <img src="https://img.shields.io/static/v1?label=&message=BOOTSTRAP &color=black&style=for-the-badge&logo=BOOTSTRAP"/> <img src="https://img.shields.io/static/v1?label=&message=JAVASCRIPT&color=black&style=for-the-badge&logo=JAVASCRIPT"/> <img src="https://img.shields.io/static/v1?label=&message=HTML &color=black&style=for-the-badge&logo=HTML"/>  <img src="https://img.shields.io/static/v1?label=&message=CSS &color=black&style=for-the-badge&logo=CSS3"/>  <img src="https://img.shields.io/static/v1?label=&message=MYSQL &color=black&style=for-the-badge&logo=MYSQL"/>  


> ## Funcionalidades


:heavy_check_mark: Login

:heavy_check_mark: Cadastro 

:heavy_check_mark: Cadastro, consulta, edição e remoção de Domínios


> ## Acesso ao Sistema

#### Para acessar é necessário:

- Ter instalado em sua máquina o PHP 7.0.0 ou versão superior: <a href="https://www.php.net/downloads">Download PHP</a>.

- Clonar este repositório em sua máquina:

```
https://github.com/MonalyzaLima/gerenciamento-de-dominio.git
```

- Abrir o diretório do projeto

```
  cd gerenciamento-de-dominio
```

- Instalar as dependencias

```
   composer install
```

- Por fim, executar os seguintes comandos no terminal:

```
  # Adiciona todas as permissões na pasta storage
  $ chmod -R 777 storage 
  # Gera a chave da aplicação
  $ php artisan key:generate 
  # Cria um link simbólico entre as pastas /public/storage -> /storage/app/public
  $ php artisan storage:link
  # Cria todas as tabelas do banco de dados SQL
  $ php artisan migrate
  # Cria um servidor em sua localhost

```
