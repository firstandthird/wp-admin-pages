FROM firstandthird/wordpress:4.6.1-2

RUN git clone https://github.com/alleyinteractive/wordpress-fieldmanager.git /var/www/html/wp-content/plugins/wordpress-fieldmanager
