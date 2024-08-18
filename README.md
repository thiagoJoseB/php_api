# Plans Management API

Este é um projeto de API desenvolvido em Laravel para gerenciar planos. O projeto inclui funcionalidades para criar, listar, visualizar, atualizar e excluir planos.

## Funcionalidades

- **Listar Planos**: Obtém todos os planos disponíveis.
- **Criar Plano**: Adiciona um novo plano ao sistema.
- **Visualizar Plano**: Exibe detalhes de um plano específico pelo ID.
- **Atualizar Plano**: Atualiza as informações de um plano existente.
- **Excluir Plano**: Remove um plano do sistema pelo ID.

## Tecnologias

- **Laravel**: Framework PHP utilizado para o desenvolvimento da API.
- **PHP**: Linguagem de programação.
- **MySQL**: Sistema de gerenciamento de banco de dados.

## Requisitos

- PHP >= 7.3
- Composer
- Laravel >= 11.20.0
- MySQL

## Instalação

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/thiagoJoseB/php_api
    ```

2. **Navegue até o diretório do projeto:**

    ```bash
    cd php_api/api
    ```

3. **Instale as dependências do projeto:**

    ```bash
    composer install
    ```

4. **Configure o ambiente:**

    Copie o arquivo `.env.example` para um novo arquivo `.env` e configure as variáveis de ambiente, como conexão com o banco de dados.

    ```bash
    cp .env.example .env
    ```

5. **Gere a chave de aplicação:**

    ```bash
    php artisan key:generate
    ```

6. **Execute as migrações para criar as tabelas no banco de dados:**

    ```bash
    php artisan migrate
    ```

7. **Inicie o servidor de desenvolvimento:**

    ```bash
    php artisan serve
    ```

   A API estará disponível em `http://localhost:8000/api/plans`.

## Rotas da API

- **GET `/api/plans`**: Lista todos os planos.
- **POST `/api/plans`**: Cria um novo plano. Requer os campos `title`, `descriptionPlans`, `datePlans`, e `participants`.
- **GET `/api/plans/{idPlans}`**: Exibe detalhes de um plano específico.
- **PUT `/api/plans/{idPlans}`**: Atualiza um plano existente. Requer os mesmos campos do `POST`.
- **DELETE `/api/plans/{idPlans}`**: Exclui um plano específico.

## Exemplo de Requisição com Postman

**Criar Plano:**

- **URL:** `http://localhost:8000/api/plans`
- **Método:** `POST`
- **Body (JSON):**

    ```json
    {
        "title": "Plano de Teste",
        "descriptionPlans": "Descrição do plano de teste.",
        "datePlans": "2024-08-17",
        "participants": "10"
    }
    ```
## Licença

Este projeto está licenciado sob a Licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
