Dragonisland
We have used Laravel 5.8 (at the time latest) version.
more update comming soon.

some command
-----------------
php artisan make:controller SiteController --model=Setting
php artisan storage:link
php artisan make:factory NotificationFactory --model=BlogPost
php artisan make:migration insert_value_in_setting_table
php artisan migrate

php artisan make:factory MovieFactory --model=
php artisan make:seeder MovieTableSeeder

php artisan db:seed --class=BlogPostTable
composer dump-autoload
php artisan db:seed

php artisan key:generate


php artisan make:factory PostFactory --model=Post

$user = DB::table('users')->where('name', 'John')->first();

echo $user->name;
$email = DB::table('users')->where('name', 'John')->value('email');
$titles = DB::table('roles')->pluck('title'); //get the all title col value
return DB::table('orders')->where('finalized', 1)->exists();

return DB::table('orders')->where('finalized', 1)->doesntExist();
$query = DB::table('users')->select('name');

$users = $query->addSelect('age')->get();
$user = DB::table('users')
                ->latest()
                ->first();
DB::table('users')->where('votes', '>', 100)->dd();

DB::table('users')->where('votes', '>', 100)->dump();
$model = App\Flight::findOrFail(1);

$model = App\Flight::where('legs', '>', 100)->firstOrFail();

public function store()
{
    $post = new Post;
    $post->fill(Input::all());
    $post->user_id = Auth::user()->user_id;

    $post->user;

    return $post->save();
}



 Collection Filters
Keeps the item only if the closure returns true

$customers = Customer::all();

$us_customers = $customers->filter(function($customer)
{
    return $customer->country == 'United States';
});
