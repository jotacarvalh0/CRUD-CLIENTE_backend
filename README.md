# API de CRUD de Clientes

Esta é uma API RESTful desenvolvida com **Laravel** que permite realizar operações de CRUD (Criar, Ler, Atualizar, Excluir) em um banco de dados SQLite para gerenciar informações de clientes.

## Como Rodar

### 1. Clone este repositório:
```bash
git clone https://github.com/jotacarvalh0/CRUD-CLIENTE_backend.git
```

### 2. Navegue até o diretório do projeto:

### 3. Instale as dependências com o Composer:
```bash
composer install
```

### 4. Configure o arquivo .env:
Altere as configurações de banco de dados, se necessário. Exemplo para SQLite:

```bash
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### 5. Execute as migrações do banco de dados:
```bash
php artisan migrate
```

### 6. Inicie o servidor local do Laravel:
```bash
php artisan serve
```

Acesse a API em: http://localhost:8000/api.

### Endpoints
A API oferece os seguintes endpoints:


GET /clientes: Lista todos os clientes.

GET /clientes/{id}: Retorna os detalhes de um cliente específico.

POST /clientes: Cria um novo cliente.

PUT /clientes/{id}: Atualiza um cliente existente.

DELETE /clientes/{id}: Exclui um cliente.

### Exemplos de Uso

### 1. GET /clientes
Retorna todos os clientes cadastrados.

```bash
GET http://localhost:8000/api/clientes
```

### 2. GET /clientes/{id}
Retorna o cliente com o ID especificado.

```bash
GET http://localhost:8000/api/clientes/1
```

### 3. POST /clientes
Cria um novo cliente. Envie os dados em formato JSON no corpo da requisição.

```bash
POST http://localhost:8000/api/clientes \
"Content-Type: application/json" \
'{"nome": "João", "email": "joao@example.com", "telefone": "123456789"}'
```
### 4. PUT /clientes/{id}
Atualiza o cliente com o ID especificado. Envie os dados atualizados no formato JSON.

```bash
PUT http://localhost:8000/api/clientes/1 \
"Content-Type: application/json" \
'{"nome": "João Silva", "email": "joaosilva@example.com", "telefone": "987654321"}'
```

### 5. DELETE /clientes/{id}
Exclui o cliente com o ID especificado.

```bash
DELETE http://localhost:8000/api/clientes/1
```
