ARG PHP_IMAGE=serversideup/php:8.4-fpm-nginx

# ----------------------------
# 3) Production image
# ----------------------------
FROM ${PHP_IMAGE} AS production

LABEL maintainer="Markus Sommer"
LABEL description="Elker's personal Website "

USER root
RUN install-php-extensions intl
USER www-data

# Copy application code
COPY --chown=www-data:www-data . .

# Copy Composer vendor from build stage
COPY --chown=www-data:www-data --from=vendor /app/vendor vendor

# Built assets overlay
COPY --from=assets --chown=www-data:www-data /app/public/build ./public/build

# Update and Optimize autoloader
RUN composer install \
          --no-dev \
          --no-interaction \
          --no-progress \
          --prefer-dist \
          --ignore-platform-reqs \
          --optimize-autoloader
