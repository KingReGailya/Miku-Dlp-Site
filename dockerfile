FROM php:apache

RUN apt update

#install dependises 

RUN apt install apt-utils
RUN apt -y install nano curl python3 ffmpeg php php-fpm php-mysql
RUN apt-get update && apt-get install -y git

#installs YT-DLP

RUN curl -L https://github.com/yt-dlp/yt-dlp/releases/latest/download/yt-dlp -o /usr/local/bin/yt-dlp

RUN chmod a+rx /usr/local/bin/yt-dlp

COPY src/ /var/www/html
