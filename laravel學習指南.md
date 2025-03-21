# github下載

- git clone https://github.com/ xxxx 自行去github複製

### 加入函式庫
- composer install
### 建立env
-    cp .env.example .env
- OR copy .env.example .env
### 幫env加入key
- php artisan key:generate
### env設定資料庫
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        資料庫名稱 需再去phpadmin建立同名資料庫
        DB_DATABASE=laravel_test
        DB_USERNAME=root
        DB_PASSWORD=
### 加入空資料表
-   php artisan migrate
-   php artisan db:seed
-   php artisan serve

===============================

# 檔案遷移(?)
 - route:
 - env放PWD
```php
Route::get('/', function () {
    $pw = env("PWD");
    // dd($pw);
    return view('index', ['pw' => $pw]);
})->name('index');
```
- 通常都放在 public/assets/css | and img  | and js
- 路徑ex:
```html
    <link rel="stylesheet" href="{{asset('assets\css\css.css')}}">
    <link rel="icon" href="{{asset('assets\img\Marie Antoinette (Summer) 1.png')}}" sizes="32x32" type="image/png">
```

===============================
# Controller 
- [官網:controller](https://laravel.com/docs/11.x/controllers)
-  終端機輸入: 
```cmd
<!-- (Photo)Controller (為自訂名稱) -->
php artisan make:controller PhotoController --resource
```
- 在routes/web輸入:
```php
use App\Http\Controllers\(Photo)Controller;
Route::resource('(photos)', (Photo)Controller::class);
```
- 在app\Http\Controllers\找到(Photo)Controller
- 可在function輸入:dd('(text)') 確認是否連到該網址
- 可在終端機輸入 php artisan route:list 查看route的網址
```php
    public function index()
    {
        $data=
        [   
            [
                'id'=>1,
                'name'=> 'apple',
            ],
            [
                'id'=>2,
                'name'=> 'babana',
            ],
            [
                'id'=>3,
                'name'=> 'cat',
            ]
        ];
        return view('student.index',['data'=>$data]);
    }
```
- 可在controller加上新的function
```php
    public function del()
    {
        dd('hi del');
    }
```
這就必須到routes\web去新增:
```php
Route::get('/students/del', [StudentController::class, 'del']);
```

# 0226 資料庫
## [官網](https://laravel.com/docs/11.x/migrations#generating-migrations)

======================================
<!-- 範例 -->
php artisan make:migration create_flights_table
<!-- 創造一個cars table -->
php artisan make:migration create_cars_table
<!-- 在資料庫創造資料表 (執行/前進一步) -->
- php artisan migrate
<!-- 創造資料表的動作:回到上一動 (退一步)   -->
- php artisan migrate:rollback

```php
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name'); //可自創資料表欄位 名稱
            $table->string('address'); //可自創資料表欄位 名稱
        }); 
```

### 在資料庫增加資料表(create)
```php
    public function up(): void
    {           // create:創造資料表
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('address');
            $table->string('love');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dogs');
    }
```

### 在資料表增加欄位(table)
```php
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {         //需要增加欄位 而不是資料表
        Schema::table('dogs', function (Blueprint $table) {
            $table->integer('love');
        });
        Schema::table('cars', function (Blueprint $table) {
            $table->integer('love');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dogs', function (Blueprint $table) {
            $table->dropColumn('love');
        });
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('love');
        });
    }
};
```
### 從資料庫query

[官網:query](https://laravel.com/docs/11.x/queries#running-database-queries)
===============================
```php
// ex:
// controller內
// 引入db
use Illuminate\Support\Facades\DB;
// 去找到資料
$users = DB::table('users')->get();
// =================================================================


// 實際做:
$data = DB::table('students')->get();
dd($data);
return view('student.index',['data'=>$data]);

// 在view輸入
@foreach ($data as $val)
<tr>
    <td>{{$val->id}}</td>
    <td>{{$val->name}} </td>
    <td>{{$val->mobile}} </td> 

</tr>

@endforeach

```
### 一次建立migrations/controller/resource
==================================
- php artisan make:model Apple -mcr
- php artisan make:model Student -mcr
- php artisan make:model Flight



=============================================================
## 2025/03/04 
[官網](https://laravel.com/docs/12.x/queries#select-statements)

```php
// ex:
use Illuminate\Support\Facades\DB;

$users = DB::table('users')
    ->select('name', 'email as user_email')
    ->get();

```
實際:
migrations:
```php
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('mobile');
        });
    }
    
```

StudentController:
```php
    public function index()
    {

        // $data = DB::table('students')->get();
        $data = DB::table('students')->select('id','name', 'mobile as my_mobile')->get();
        dd($data);
        // return view('student.index',['data'=>$data]);
    }

```
## 新增資料
===========================================
- 創建一個Models
- ex::
```cmd
php artisan make:model Flight
php artisan make:model student
```

[官網(The Basics/Requests/Accessing the Request)](https://laravel.com/docs/11.x/requests#accessing-the-request)

在StudentController:
```php
//使用這個models
use App\Models\Student;
```
[官網](https://laravel.com/docs/11.x/controllers#resource-controllers)
在views/student/create.balde.php:  
```php
        //路徑為 store 新增                     //方法為post
  <form action="{{route('students.store')}}" method="POST">
  //危險指令需要加上 @csrf
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3">
      <label for="mobile">mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
```

在StudentController:
```php
//使用這個models
use App\Models\Student;

        // dd($request);
        $input = $request->except('_token');
        // dd($input);

        $data = new Student;

        // $data->name = $request->name;
        // $data->mobile = $request->mobile;

        $data->name = $input['name'];
        $data->mobile = $input['mobile'];

        $data->save();

        return redirect()->route('students.index');
        // return redirect('/students');
```

======================================================

## 03/11 laravel學習 edit(修改)
=============================================
- GET	/photos/{photo}/edit	edit	photos.edit

在views/student/創建一個 edit.balde.php  
在views/student/index.balde.php 增加:
```html
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>mobile</th>
            // 多加一欄
            <th>opt</th>
          </tr>
        </thead>
        <tbody>             
          @foreach ($data as $val)
            <tr>
                <td>{{$val->id}}</td>
                <td>{{$val->name}} </td>
                <td>{{$val->mobile}} </td> 
                <td>
                // edit的 route內需包參數:id 
                  <a href="{{route('students.edit',['student'=>$val->id])}}">

                    <button class="btn btn-warning">edit</button>  
                  </a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
```

在StudentController:
```php
    public function edit(string $id)
    {
        // 確保已經抓到edit/$id
        dd("hi the $id");
    }
```
- 抓到的網址會是: http://localhost/Laravel/Laravel_lrean/public/students/1/edit  
- student/$id/edit
- 在views/student/edit.balde.php 增加:
```php
  <form action="{{route('students.update',['student'=>$data['id']])}}" method="POST">
    @method('put')
```

在StudentController:
```php
    public function update(Request $request, string $id)
    {
        // 把 $request內的  '_token','_method 清除
        // $input為更新的資料 
        $input = $request->except('_token','_method');
        // dd($request);
        // $data為原始資料
        $data = Student::find($id);
        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();
        // 導回首頁
        return redirect()->route('students.index');
    }
```

## 刪除 destroy

- 在views/student/index.balde.php 增加:
```php
                    // del需要@csrf   @method('delete')
                    // 所以用表單包起來
                    

                  <form action="{{route('students.destroy',['student'=>$val->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{ route('students.edit', ['student' => $val->id]) }}"
                      class="btn btn-warning">edit</a>
                                // 用submit導去students.destroy
                      <button type="submit" class="btn btn-danger">del</button>  

                  </form>
```
在StudentController:
```php
    public function destroy(string $id)
    {
        // dd($id);
        $data = Student::find($id);
        $data->delete();
        
        return redirect()->route('students.index');
// $flight = Flight::find(1);
 
// $flight->delete();

    }
```

## 2025/03/12 資料庫一對一,一對多
=============================
[官網/Eloquent ORM/Relationships/One to One / Has One](https://laravel.com/docs/11.x/eloquent-relationships#one-to-one)
- 創一個 Phone的資料表 (給Student用)
- php artisan make:model Phone -mcr


- 在database/migrations:
```php
    public function up(): void
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            // 關聯資料庫:student_id
            $table->integer('student_id');
            $table->string('phone');
            $table->timestamps();
        });
    }
```
建立資料表
- php artisan migrate


- 在app/Models/Phone.php:
```php
use Illuminate\Database\Eloquent\Model;
// 綁
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Phone extends Model
{                   
                    // 主表
    public function student(): BelongsTo
    {                           
                                // 主表
        return $this->belongsTo(Student::class);
    }
}
```
- 在app/Models/Student.php增加:
```php
                                        // 綁定         
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
        /**
     * Get the phone associated with the user.
     */
                // 綁在phone
    public function phone(): HasOne
    {                       
                            // 綁在Phone
        return $this->hasOne(Phone::class);
    }

}
```
在StudentController:
```php
// =============================== index


    public function index()
    {
                        // with 可把子表的資料撈出來
        $data = Student::with('phone')->get();
        
        return view('student.index',['data'=>$data]);
    }
// ============================ store


//                              新增:
    public function store(Request $request)
    {
               // dd($request);
               $input = $request->except('_token');
               // dd($input);
            // 主表   
               $data = new Student;
               $data->name = $input['name'];
               $data->mobile = $input['mobile'];
               $data->save();
            // 子表
            $item = new Phone;
            $item->student_id = $data->id;
            $item->phone = $input['phone'];
            $item->save();    
               return redirect()->route('students.index');
               // return redirect('/students');
    }
// ========================= edit頁面


        public function edit(string $id)
    {
        $url= route('students.edit',['student'=>$id]);
                    // with 可把子表的資料撈出來
        $data = Student::with('phone')->find($id);

        return view('student.edit',['data'=>$data]);
    }
// ============================ update


        public function update(Request $request, string $id)
    {
        // 把 $request內的  '_token','_method 清除
        // $input為更新的資料 
        $input = $request->except('_token','_method');
        // $data為原始資料
        // 主表
        $data = Student::find($id);
        $data->name = $input['name'];
        $data->mobile = $input['mobile'];
        $data->save();
        // 子表
        // 刪除子表
        // Phone::find(['student_id',$id])->delete();
                // 刪除子表
                Phone::where('student_id', $id)->delete();
        // 子表
        $item = new Phone;
        $item->student_id = $data->id;
        $item->phone = $input['phone'];
        // 懶人包 不要用foreach 直接複製欄位
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        // $item->phone = $input['phone'];
        $item->save();    
        // 導回首頁
        return redirect()->route('students.index');
    }
// ================================ destroy


        public function destroy(string $id)
    {
        // dd($id);
        // 先刪除子表
        Phone::find($id)->delete();
        // Phone::where('student_id', $id)->delete();
        // 刪除主表
        // Student::where('id', $id)->delete();
        Student::find($id)->delete();
        // $data->delete();
        return redirect()->route('students.index');
    }
```
