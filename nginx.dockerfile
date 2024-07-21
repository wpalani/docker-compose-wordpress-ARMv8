FROM arm64v8/nginx:stable-alpine

ADD ./nginx/default.conf /etc/nginx/conf.d/default.conf
ADD ./nginx/fastcgi.conf /etc/nginx/fastcgi.conf
ADD ./nginx/certs /etc/nginx/certs/self-signed

RUN mkdir -p /var/www/html
