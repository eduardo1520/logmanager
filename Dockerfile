# Usa a imagem oficial do MySQL como base
FROM mysql:8.0

# Define variáveis de ambiente para configurar o MySQL
ENV MYSQL_ROOT_PASSWORD=eoliveira
ENV MYSQL_DATABASE=logmanager_db
ENV MYSQL_USER=logmanager
ENV MYSQL_PASSWORD=logmanager06062025

# Copia um script de inicialização, se quiser (opcional)
# COPY ./init.sql /docker-entrypoint-initdb.d/

# Expõe a porta padrão do MySQL
EXPOSE 3306
