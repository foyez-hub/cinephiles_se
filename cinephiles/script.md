1. install composer -- this is install globally.

2.install laravel installer

2. command: laravel new projectName

then go folder and open in vs code


3. php artisan serve 




    create database below



4. then manully create new empty database

then delete all by defullt migration all file in database/migration/all file
then .env database name setup. if not set

 php artisan make:migration create_users_table--- here this create and table is syntax and users is table name

php artisan make:migration create_login_table


 5. then this migration function ar bitor table declare column declare korbo
up function ar bitor like:

 public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('accountType');
            $table->string('password');
            $table->timestamps();
        });
    }


then run command: php artisan migrate

6. then create php seeder 


command: php artisan make:seeder  UserSeeder

here UserSeeder is name of Seeder

here in database/seeder/ file ar bitor create hbe

public run function

we need to import database 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;  --this is for encrypt password


then insert data in run function like

  public function run(): void
    {
        //
        DB:: table('users')->insert([
            'name'=>'jony',
            'email'=>'mhjony336@gmail.com',
            'password'=>Hash::make('12345'),
            'accountType'=>'jony'
        ]);


    }


then   
command: php artisan db:seed --class UserSeeder   
php artisan db:seed --class loginseeder
here UserSeeder is my database seeder name


5.Route::get('/login', [UserController::class, 'login']);
UserController -> controller name
login->fuction name;

6.
function userLogin(Request $req){
    
        $data = $req->input("username");//this user for form name=user
        echo $req->session()->put("user",$data);
        echo $data;
        echo session("user");
        return redirect("profile");



     }