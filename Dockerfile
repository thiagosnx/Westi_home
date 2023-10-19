# Use a imagem oficial do PHP
FROM php:latest

# Defina o diretório de trabalho no contêiner
WORKDIR /var/www/html

# Copie os arquivos do seu projeto para o contêiner
COPY . /var/www/html

# Exponha a porta 80 para acessar o servidor web
EXPOSE 80

# Comando para iniciar o servidor web PHP
CMD ["php", "-S", "0.0.0.0:80"]


# Instale extensões ou bibliotecas adicionais, se necessário
RUN docker-php-ext-install mysqli
