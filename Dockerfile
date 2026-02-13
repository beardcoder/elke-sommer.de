ARG PHP_IMAGE=serversideup/php:8.4-fpm-nginx

# ----------------------------
# 1) Frontend build (Vite) with Bun
# ----------------------------
FROM oven/bun:1-slim AS assets
WORKDIR /app

COPY package.json bun.lockb* ./
RUN --mount=type=cache,target=/root/.bun/install/cache \
    bun install --frozen-lockfile

COPY resources/ resources/
COPY vite.config.js ./
COPY public/ public/
RUN bun run build

# ----------------------------
# 2) PHP dependencies (Composer) using same PHP as prod
# ----------------------------
FROM ${PHP_IMAGE} AS vendor
WORKDIR /app

# Note: serversideup/php images come with Composer pre-installed
COPY . .

RUN --mount=type=cache,target=/root/.composer/cache \
    composer install \
      --no-dev \
      --no-interaction \
      --no-progress \
      --no-scripts \
      --prefer-dist \
      --ignore-platform-reqs \
      --optimize-autoloader

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
RUN composer dump-autoload \
      --no-dev \
      --ignore-platform-reqs \
      --classmap-authoritative \
      --no-interaction
