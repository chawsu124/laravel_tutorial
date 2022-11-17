<?php
use Illuminate\Support\Facades\Route;
// Controller
// use app\Http\Controllers\MyController;

// This follow all testing codes are write in web.php file
// --------testing----------
// Route:: get('URL',ClosureFunction(){}) // Closure function = Anonymous function
Route:: get('/contact',function(){// Route:: is static variable ,so call in ::
    return "Hello Testing this is contact page !";
});

// testing
Route:: get('/contact/{var}',function($var){
    return "Testing this is contact page id:" . $var;
});

// testing
Route:: get('/post/{id}/{title}',function($id, $title){
    return "This post id is " . $id . " and title is " . $title;
});

// testing
Route:: get('/contact/example/test/wifer/laravel/hello',function(){
    return "This is so long URL .";
});

//------------testing URL in associative array('as'=>'youLikeURL',function(){})-----------
Route:: get('/contact/example/test/wifer/laravel/hello',array('as'=>'dev.home',function(){
    // Instead of-> <a href="/contact/example/test/wifer/laravel/hello">GoLink</a>
    // Use this way-> <a href="route('dev.home')">GoLink</a>
    $url = route('dev.home');
    return "The URL is " . $url;
}));
// If The long URL you put is 'dev.home' or not // testing in terminal
// In terminal(or)cmd -> php artisan route:list

//-----------Create Controller & Testing with this controller you create
// How to Create Controller ?
// 1. with UI -> app->Http->Controllers-> rightClick->NewFile->ControllerName.php
// 2. with terminal(or)cmd -> php artisan make:controller controllerName 
                          // or
                          //-> php artisan make:controller --resource controllerName                   
Route::get('/my','App\Http\Controllers\MyController@index');
Route::get('/post','App\Http\Controllers\PostController@index');

//call index() fun: with arguments in Use Controller 
Route::get('/post/{username}/{password}','App\Http\Controllers\PostController@index');

// Using Resource for Routing by using Controller
Route:: resource('/posts','App\Http\Controllers\PostController');// use resource() keyword
// using resource() is call all fun() in this Controller
// test in cmd -> php artisan route:list // show all fun() in this Controller

// ------test Using own create methods in Controller connect with views
Route::get('/home/{name}/{country}','App\Http\Controllers\PostController@home');
Route::get('/about','App\Http\Controllers\PostController@about');
Route::get('/contact','App\Http\Controllers\PostController@contact');

//----------Passing Data To views as associative Array form
//Route::get('/home/{name}/{country}','App\Http\Controllers\PostController@home');
//------------------------------------------------------------------
//------------ How to Download new Laravel Project ?
// Firstly, you must first download ->Xampp->composer installation and git installation
// There are 3 ways to Download
// Firstly, cd D-> cd YourFolderWantToProjectPut
 
// composer create-project laravel/laravel YouLikeName // download lastest version
// composer create-project laravel/laravel YouLikeName 5.3.10 // download 5.3.10 version
// composer create-project --prefer-dist laravel/laravel YouLikeName 5.3.10 // download 5.3.10 version in prefer dist -->

//------------How to migrate the exist migration table ?
// Firstly, connect your databaseName in .env file 
// Then, create your migration file that is you want table
// In cmd(or)Terminal, run this command in your project folder
                    //php artisan migrate
//So, this migrate table appear in your database

//----------How to create new Controller from terminal?
// Simple Controller
            // php artisan make:controller ControllerName
// Controller with resources
            // php artisan make:controller ControllerName -r

//-----------How to get middleware ?
                // php artisan make:middleware MiddlewareName

//----------How to drop migrate table did you create?
//In cmd(or)Terminal, run this command in your project folder
                    //php artisan migrate:rollback
//So, this migrate table disappear in your database
                
//----------How to get custom migration file from Terminal?
//In cmd(or)Terminal, run this command in your project folder
                    //php artisan make:migration create_post_table --create=post
//[you can use you like (create_table_name) instead of (create_post_table) --create=youWantToCreateTable]
//So, you get this migration table in migrations folder

//write column you want to put in custom migration file you get
//and then, run this command -> 
                    //php artisan migrate
//So, you can see this table in your database

//------------How to add new column to migration table you did by creating new migration file?
//php artisan make:migration add_isadmin_column_to_post --table=posts
//So, you can get this new migration file , and you can write new column to add

//------------How to create Model & migration file if I want to use model?
// php artisan make:model Post 
// php artisan make:model Post -m
// So, you can see Post model file is under app folder and migration file is under database->migrations folder
// the last -m is represents for create migration file
// Post is represents for Table name for small letter -> 'posts' table in migration file

//eg:  php artisan make:model Cracky -m   -> So, 'crackies' table in migration file

// ------you can write likely table and columns in your migration file and run php artisan migrate
// So, you can see your create table in database
// if your table name in DB is same as table name in model file
// and then, if your table name is not same as table name in model file
// So if, in model file->under 
    class Post extends Model{
        protected $table = 'hacky';// 'hacky' is table name in DB// this table name is your choice
    } 
// if you want use data in Model file because this model file is extends from main Model.php file
// , So as, declare this keyword in web.php file of routes folder
           use App\YourModelfileName;

//--------- Using Model file you create,
// Insert data Using model as obj style 
        Route::get('/insertNew',function(){
            $post = new Post; // create $post obj from Post Model

            $post->title='Java'; // data to title column
            $post->content='Java Servelet system'; // data to content column
            $post->save(); // use save() after all data
        });
// Insert Data Using mass create() method , Using Model file
        Route::get('/create',function(){
            Post::create(['title'=>'Bootstrap','content'=>'Tutorials by Brighter Myanmar']);
        });
        // and In your create Post.php Model file,
        class Post extends Model{
            protected $table = ['title','content'];
        }
    // So, you can run and get this data in table
// Update Data Using update() method , Using Model file
        Route::get('/updateNew',function(){
            Post::where('id',1)->where('title','LARAVEL')->update(['title'=>'PYTHON','content'=>'Python programming language']);
        });
// Update data Using Model file
        Route::get('/updateData',function(){
            $post = Post::find(1); // get data if id=1

            $post->title='AJAX'; // update data to title column
            $post->content='Javascript Framework'; // update data to content column
            $post->save(); // use save() after all data
        });
// Delete data from post table if 'id'=? , Using delete() (or) destroy() method of Post.php Model file
        Route::get('/deleteData',function(){
            $postDelete = Post::find(3); // find() id=3
            $postDelete->delete(); // delete this data
            // or
            Post::destroy(3); // delete data if id=3
            // if you want to delete id=3,4,5
            Post::destroy([3,4,5]); // delete data if id=3,id=4,id=5,
        });
// Show all data from post table using Modelfile, without using raw SQL  
//So, all() method in main Model file, write in web.php file-> 
        Route::get('/all',function(){
            $posts = Post::all(); // Post:: is your create model file name// your choice
            return $posts;
        });
// Show data from post table related to 'id', Using find(idNumber) method using Modelfile, without using raw SQL 
        Route::get('/findData',function(){
            $posts = Post::find(2); // Post::find(2) is 'id'= 2 in post table using find() library method
            return $posts->title; // show title column if 'id' = 2
        });

// Show data from post table where 'id'= and 'ColNameYoulike'= ,Using where()->get() method using ModelFile, without using raw SQL
        Route::get('/whereData',function(){
            $output = Post::where('id',2)->where('title','PHP')->get(); // if 'id'= 2 and 'title'='PHP' in post table, using where() library method
            return $output; // show title column if 'id' = 2
        });
// SoftDelete
// Firstly, you should insert declare and code in Post.php file
// and then, you should run in terminal for new migration file of new deleted_at column to posts table, 
// and insert code in its migration file, and then, php artisan migrate, so, posts table have new deleted_at column
// and write follow code in web.php file->
Route::get('/softdelete',function(){
    $post = Post::find(8);
    $post->delete();
});
// Search id=? which in SoftDelete Trash bin,
//  find() => only find in no deleted data 
//  withTrashed() => find in Both deleted data/Trash bin and no deleted data
//  onlyTrashed() => only find in deleted data/Trash bin
Route::get('/findSoftDeleteData',function(){
    //$posts = Post::withTrashed()->where('id',7)->get(); // 'id'= ? in Trash bin
    $posts = Post::onlyTrashed()->where('id',8)->get();
    return $posts; // show all data of this id
});
//----------------- Using Raw SQL,
// Insert to post table in Database 
Route::get('/insert',function(){
    // Using Raw SQL
    // DB::insert(
    //     'insert into post(title,content) value(?,?)'
    //     ,['Laravel','Laravel Tutorial by WaiferKolar']
    // );

    DB::insert(
        'insert into post(title,content) value(?,?)'
        ,['PHP','Tutorial by Brighter Myanmar']
    );
});

// Select from post table in Database
Route::get('/read',function(){
    //------Select all data from post
    $result = DB::select('select * from post');
    // return $result;

    // ------Select all data from post where id=1
    //$result = DB::select('select * from post where id=?',[1]);
    //var_dump($result);// show data by var_dump()
    //return $result; // show data by return // Simple form

    $show="";
    foreach($result as $post){
        $show .= $post->title . '<br>' . $post->content . '<br>';// put data into $show variable each time of loop
    }//show data by foreach loop()
    return $show;// return
});

// update data from post in Database
Route::get('/update',function(){
    DB::update('update post set title=? where id=?',['LARAVEL',1]);
});

// delete id of row in post from post in Database
Route::get('/delete/{id}',function($id){
    $ans = DB::delete('delete from post where id=?',[$id]);// where id=$id
    return $ans;
});

//----------------------------------------------------------------------------------
// -------Session // follow code are test in web.php 
Route::get('/session','App\Http\Controllers\SessionController@index');

Route::get('setSession','App\Http\Controllers\SessionController@setSession');
Route::get('getSession','App\Http\Controllers\SessionController@getSession');
Route::get('deleteSession','App\Http\Controllers\SessionController@deleteSession');

//-------multiple Session
Route::get('setMultipleSession','App\Http\Controllers\SessionController@setMultipleSession');