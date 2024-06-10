<div align="center">

# Laravel Loader

![Packagist Version](https://img.shields.io/packagist/v/daresdev/laravel-loader)
![License](https://img.shields.io/github/license/daresdev/laravel-loader)

Laravel Loader es un paquete para Laravel 11 que muestra un loader mientras las páginas se están cargando.
</div>

## Instalación

Puedes instalar el paquete vía Composer:

```bash
composer require daresdev/laravel-loader
```

## Uso

Agrega el middleware en **bootstrap/app.php**:

```php
 ->withMiddleware(function (Middleware $middleware) {
    //...
    $middleware->append(\Daresdev\LaravelLoader\LoaderMiddleware::class);
})
```


## Personalización

Si necesitas personalizar el loader, puedes modificar el archivo **loader.blade.php** publicado en **resources/views/vendor/loader/loader.blade.php** ejecutando el siguiente comando:
```bash
 php artisan vendor:publish --provider="Daresdev\LaravelLoader\LoaderServiceProvider"
```


## Licencia

El paquete está licenciado bajo la [GPL-3.0 license](https://opensource.org/licenses/MIT). Mira el archivo [LICENSE](LICENSE) para más información.

## Contribuciones

Si quieres contribuir, por favor envía un pull request para cualquier mejora o corrección.

## Autores

- [Daresdev](https://github.com/daresdev)
