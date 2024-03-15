FROM bref/php-83-fpm:2
COPY . /var/task
CMD ["public/index.php"]
