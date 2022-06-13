FROM ubuntu

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get install -y apache2
RUN apt-get install -y git
RUN apt-get install -y composer
RUN apt-get install -y ssh

WORKDIR /var/www/html

# clone repo
RUN git clone git@github.com:fabiohvieira/laravel.git
# composer install
# make laravel key
# env 


EXPOSE 80