# atividade_teste_automatizacao

Instruções de uso:

- Clone o repositório
- Entre na pasta do projeto
- Execute a instrução "docker compose run composer require --dev phpunit/phpunit"
- Para rodar o composer dump: "docker compose run composer -- dump"
- Para subir os containeres execute: "docker compose up -d fpm nginx"
- Acesso no navegador o endereço: "localhost:8080" para executar o aplicativo
- Para rodar os testes execute: "docker compose run php vendor/bin/phpunit"
