# Тестовый плагин laravel 5.4

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


## Задание
Для Laravel 5.4 написать сервис, отдельным модулем,
который возможно проинсталлировать через composer из локальной директории в vendor из дериктории ../vendor/objects

При публикации сервиса через artisan vendor:publish в дериктории конфигураций laravel должен создаться конфиг objects.php

Сервис должен быть доступен через алиас "Objects" фасада сервиса
Сервис имеет метод make - возвращающий объекты типа класса из конфига objects.php

В конфиг objects.php будут вноситься различные значения '{Наименование}'' => [class => '{Класс}', age => {Возраст}], например 'Dog' => ['class' => \Examples\Dogs::class, 'age' => 7 ], 'Cat' => ['class' => \Examples\Cats::class, 'age' => 3 ], 
где все классы обязаны иметь методы age() возвращающие соответствующее значение из age - конфига в соответствии с классом, и class() возвращающие строку с наименованием класса объекта в котором вызван

Сервис не может создать объект, у класса которого отсутствуют обязательные методы.
Если запросить не существующий в конфиге класс, должно быть брошено исключение класса \Examples\ObjectsMakeException::class

Тесты в php artisan tinker:

 $dog = Objects::make('Dog'); \\$dog объект класса \Examples\Dogs
 $dog->age(); \\Должен вернуть 7
 Objects::make('Cat')->age(); \\Должен вернуть 3
 Objects::make('Cat')->class(); \\Должен вернуть (String) '\Examples\Cats'

 Objects::make('Human'); // ObjectsMakeException
