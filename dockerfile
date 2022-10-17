FROM nginx

RUN apt update


#install dependises 

RUN apt -y install nano curl python3 ffmpeg cronb php php-fpm php-mysql

#installs YT-DLP

RUN curl -L https://github.com/yt-dlp/yt-dlp/releases/latest/download/yt-dlp -o /usr/local/bin/yt-dlp

RUN chmod a+rx /usr/local/bin/yt-dlp

COPY src/  /usr/share/nginx/html
