# Danganf - Basic Structure Module Laravel

## Variáveis de conexão de banco de dados

Edite o arquivo abaixo para alterar conexão com banco de dados (caso exista).
> vendor/danganf/basic-structure-module/src/app/config/database_conn.php

Edite o .env da raiz do projeto para incluir as variáveis locais:

```
BASIC_CONN_DB_HOST=_HOST_
BASIC_CONN_DB_DATABASE=_DATA_BASE_
BASIC_CONN_DB_PORT=_PORT_
BASIC_CONN_DB_USERNAME=_USER_
BASIC_CONN_DB_PASSWORD=_PASS_
```

Em seguida execute:

> php artisan config:cache

### Migrations

Execute o comando para rodar as migrations do projeto:

> php artisan migrate --database="database_conn_mysql" --path=vendor/danganf/basic-structure-module/src/app/Database/Migration
