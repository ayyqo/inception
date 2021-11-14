[global]

error_log = /dev/stderr

[www]

user = www-data
group = www-data

listen = 9000
listen.owner = nginx
listen.group = nginx
listen.mode = 0660

pm = dynamic
pm.max_children = 7
pm.start_servers = 2
pm.min_spare_servers = 1
pm.max_spare_servers = 3

clear_env = no

chdir = /var/www/wordpress
