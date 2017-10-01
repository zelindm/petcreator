# Тестовый плагин

## Установка

`composer require zelindm/petcreator`

Подключить сервис-провайдер и фасад в файле *app.php*

```php
'providers' => [
    ...
    Zelindm\PetCreator\PetCreatorServiceProvider::class,
    ...
],

'aliases' => [
    ...
    'PetCreator'             => Zelindm\PetCreator\Facades\PetCreatorFacade::class,
    ...
]
```