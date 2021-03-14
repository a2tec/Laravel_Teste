## About

php artisan serve
create database
config database

## Rotas dicas
Route::get('/', function () { return view('welcome'); });
Route::get('/a', function () { return 'Hi - /a'); });
Route::get('/a/{b}', function ($b) { return 'Hi ' . b); });
Route::get('/a/{b?}', function ($b == null) { return 'Hi ' . b); });

# Controller
php artisan make:controller Hello

# Migrate
php artisan migrate:install
