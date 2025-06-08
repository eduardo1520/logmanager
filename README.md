# Etapas para subir o projeto.

## Primeiro passo: precisa ter o docker desktop ou o docker rodando na máquina.
## Segundo passo efetuar o clone do projeto no repositorio: git remote add origin https://github.com/eduardo1520/logmanager.git, e execute o seguinte comando para instalar as dependencias php artisan install e npm install.
## Terceiro passo acesse a raiz do projeto, rode o comando para subir o banco de dados MYSQL comando: docker run --rm --name mysql-container -p 3306:3306 -d mysql8 
## Quarto passo efetue a migração da base de dados, tabelas e registros para teste comando: php artisan migrate --seed
## Quinto passo execute o comando para subir o servidor backend da aplicação: php artisan serve, com isso ele vai subir a aplicação na porta 8000
## Sexto passo abra outro terminal, na raiz do projeto rode npm run dev para subir o VITE para ficar escutando modificacões no projeto, muito util para o desenvolvimento.


### O projeto foi desenvolvido com o Laravel Splad e PHP 8.4, foi utilizado o padrão de arquitetura limpa e OO na estrutura e banco de dados MYSQL 8 na imagem Docker.
### A regra de negócio foi preparar o sistema para poder emitir etiquetas de entrega para multi transportadoras.
