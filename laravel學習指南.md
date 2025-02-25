# github下載

- git clone https://github.com/ xxxx

<!-- 加入函式庫 -->
- composer install
<!-- 建立env -->
-    cp .env.example .env
- OR copy .env.example .env
<!-- 幫env加入key -->
- php artisan key:generate
<!-- env設定資料庫 -->
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
    <!-- 資料庫名稱 需再去phpadmin建立同名資料庫 -->
- DB_DATABASE=laravel_test
- DB_USERNAME=root
- DB_PASSWORD=
<!-- 加入空資料表 -->
- php artisan migrate
<!--  -->
- php artisan db:seed
- php artisan serve
