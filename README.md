
## Projeto sistema administrativo da plataforma E-diaristas

Desenvolvido no curso multi-stack da treinaweb

### Instalando projeto 

#### Clonar o repositório

```
git clone https://github.com/vinicussavillla/e-diaristas
```
##### Instalar as dependências 

```
composer install
```
Ou em ambiente de desemvolvimento:

```
composer update
```

#### Criar arquivo de configurações de ambiente 

Copiar o arquivo de Exemplo `.env.example` para `.env` na raiz do projeto configurar os detalhes da aplicação e conexão com o banco de dados. 

#### Criar a estrutura no banco de dados 

```
php artisan migrate 
```
#### Criar o usário admin 

```
php artisan db:seed 
```

Usuário criado admin@admin.com 
senha: 123123123

#### Iniciar o servidor de desenvolvimento 

```
php artisan serve
```