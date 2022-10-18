FROM httpd

RUN apt update

#install dependises 

RUN apt instasll apt-utils
RUN apt -y install nano curl python3 ffmpeg php php-fpm php-mysql
RUN apt-get update && apt-get install -y git

#Makes Website do the work?

COPY httpd.conf /usr/local/apache2/conf/

#installs YT-DLP

RUN curl -L https://github.com/yt-dlp/yt-dlp/releases/latest/download/yt-dlp -o /usr/local/bin/yt-dlp

RUN chmod a+rx /usr/local/bin/yt-dlp

COPY src/ /usr/local/apache2/htdocs/
