FROM dunglas/frankenphp

# install the PHP extensions we need (https://make.wordpress.org/hosting/handbook/handbook/server-environment/#php-extensions)

RUN install-php-extensions \
    bcmath \
    exif \
    gd \
    intl \
    pdo_mysql \
    mysqli \
    zip \
    imagick \
    opcache \
    xdebug

CMD ["frankenphp", "run", "--config", "/etc/caddy/Caddyfile"]