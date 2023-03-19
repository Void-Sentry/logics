ls
ls -l
clear
composer update
ls
clear
php artisan migrate
docker-php-ext-install mysql
clear
php artisan make:model -m tipo_usuario
php artisan make:model -m veiculo
php artisan make:model -m entregas
php artisan make:model -m cargas
php artisan make:model -m pedido_items
php artisan make:model -m endereco
php artisan make:model -m rotas
ls
ls -l app/Models/
php artisan migrate refresh
php artisan migrate:refresh
php artisan migrate:fresh
php artisan migrate:fresh
php artisan migrate:fresh
php artisan make:controller c_carga --resource --model=cargas
php artisan make:controller c_endereco --resource --model=
clear
php artisan make:controller c_entregas --resource --model=entregas
php artisan make:controller c_pedido_items --resources --model=pedido-items
php artisan make:controller c_pedido_items --resource --model=pedido-items
php artisan make:controller c_pedido_items --resource --model=pedido_items
php artisan make:controller c_rota --resource --model=rotas
php artisan make:controller c_tipo_usuario --resource --model=tipo_usuario
php artisan make:controller c_usuario --resource --model=User
php artisan make:controller c_veiculo --resource --model=veiculo
chmod 777 -R .
php artisan serve --host 0.0.0.0 --port 8000
clear
php artisan optimize
clear
php artisan config:clear
php artisan route:list
php artisan optimize
php artisan config:clear
php artisan route:list
php artisan serve
php artisan migrate:fresh
php artisan serve
php artisan optimize
php artisan config:clear
php artisan route:list
clear
php artisan serve
php artisan route:list
php artisan serve
php artisan optimize
php artisan config:clear
php artisan route:list
php artisan optimize
php artisan config:clear
php artisan route:list
php artisan optimize
php artisan config:clear
php artisan serve
php artisan optimize
php artisan config:clear
php artisan route:list
php artisan optimize
php artisan config:clear
php artisan route:list
php artisan serve
clear
