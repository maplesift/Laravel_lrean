## 1.安裝laravel 指定版本
[官網(Creating a Laravel Project v10.0)](https://laravel.com/docs/10.x/installation#creating-a-laravel-project)

```git bash
composer create-project "laravel/laravel:^10.0" example-app
```
cd laravel_03_04
php artisan

設定xampp apache路徑
restart xampp

[官網Eloquent ORM/generating-model-classes](https://laravel.com/docs/10.x/eloquent#generating-model-classes)

### 一次建立migrations/controller/resource
==================================
php artisan make:model Flight -mcr
php artisan make:model Student -mcr

[官網The Basics/Controllers/Resource-controllers](https://laravel.com/docs/10.x/controllers#resource-controllers)

```php
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

use App\Http\Controllers\StudentController;

Route::resource('students', StudentController::class);
```
到StudentController:

```php
    public function index()
    {
        dd('hello index');
    }
```

到resources/views 創資料夾student/index.balde.php

```html
          <h1>
            hello students index
            </h1>
```