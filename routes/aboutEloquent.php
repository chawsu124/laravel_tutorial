<?php
// insert data to users table that is exist laravel file and make migrate
// make model Tutorial and migration file that is insert data to tutorials table and migrate

// ------------one to one relation
// use one to one in model file, create function (){write code belongs to...} in our create Tutorial model file
// and then, auto call this function() from web.php, and use it

//-------------has many relation
// use hasmany , create function(){write code hasMany ...} in exist User model file
// and then, auto call this fun() from web.php and use it

//------------has one relation
// use hasOne , create function(){write code hasOne ...} in exist User model file
// and then, auto call this fun() from web.php and use it

//-----------many to many relation


//-----using eloquent, follow codes test in web.php
// ----------For tutorials table,
// Insert data using mass create() method,
Route::get('/tutorial/insert',function(){
    Tutorial::create(['user_id'=>1,'title'=>'fifth','content'=>'This is fifth tutorial of website']);
});
// Select all data using all() method using Model file,
Route::get('/tutorial/all',function(){
    $tutos = Tutorial::all();

    foreach($tutos as $tuto){
        echo $tuto->title . '<br>';
        echo $tuto->content . '<hr>';
    }
});
// Select data related id in tutorials table using find() method using Model file,
Route::get('/tutorial/{id}',function($id){
    $tuto = Tutorial::find($id);
    echo $tuto->title . '<br>';
    //--------one to one
    // user name of this related 'id' from users table, using one to one Relation
    // auto call user() fun: in Tutorial.php model
    echo 'Written by: ';
    echo $tuto->user->name;// ->user is user define fun() in Tutorial.php model, auto call in Laravel
    // echo $tuto->user; // output is all data in users table related to id
});
// Select data related id in users table using where() method using Model file,
Route::get('/user/{id}/tuto',function($id){
    $user = User::where('id',$id)->firstOrFail();
    echo $user->name;
    //--------has many 
    // show 'title' from tutorials table related 'user_id' from this table, call from user table, using one to one Relation
    // auto call tutos() fun: in User.php model
    echo ' teach follow Tutorials - <br>';
    foreach($user->tutos as $tuto){// ->tutos is user define fun() in User.php model, auto call in Laravel
        echo $tuto->title . '<br>';
    }
});
// Select data related id in cities table using where() method using Model file,
Route::get('/user/{id}/cities',function($id){
    $user = User::where('id',$id)->firstOrFail();
    echo $user->name . ' live in <strong>';
    // -------has one
    // show 'name' from cities table related 'user_id' from users table
    echo $user->city->name . '</strong>';// ->city is user define fun() in User.php model, auto call in Laravel
});
// Select role data related user_id in roles table using find() method using Model file,
Route::get('/user/{id}/role',function($id){
    $user = User::find($id);
    echo $user->name . ' work as <strong>';
    // -------many to many 
    // show 'jobName' from role table related 'user_id' from users table
    foreach($user->role as $rank){// ->role is user define fun() in User.php model, auto call in Laravel
        echo $rank->jobName . '<br>'; // get jobName in roles table related to user_id
    }
    echo '</strong>';
});
// Select title of tutorials table related city_id, using throught user_id, using find() method using Model file,
Route::get('/city/{id}/tuto',function($id){
    $city = City::find($id);
    echo $city->name . ' teacher teachs follow tutorials <br>';

    // -------has many through
    // show 'title' from tutorials table related 'user_id' by inputing city_id
    foreach($city->tutoFromCity as $tuto){// ->tutoFromCity is user define fun() in City.php model, auto call in Laravel
        echo $tuto->title . '<br>';
    }
});
//------using polymorphic relation,
// select 'content' from comments table by inputing user_id of users table according to commentable_id
Route::get('/user/{id}/comment',function($id){
    $user = User::find($id);
    echo $user->name . ' \'s tutorial posts are writes in this comments <strong><br>';
    // using Polymorphic relation, Firstly, you must create commentable() in Comment model file
    // and then, comments() in User.php model and Tutorial.php model because this model use it comments
    foreach($user->comments as $comment){// ->tutoFromCity is user define fun() in City.php model, auto call in Laravel
        echo $comment->content . '</strong><br>';
    }
}); // (or)
// select 'content' from comments table by inputing tuto_id of tutorials table according to commentable_id
Route::get('/tuto/{id}/comment',function($id){
    $tuto = Tutorial::find($id);
    echo $tuto->title . ' tutorial post is writes in this comments <strong><br>';
    // using Polymorphic relation, Firstly, you must create commentable() in Comment model file
    // and then, comments() in User.php model and Tutorial.php model because this model use it comments
    foreach($tuto->comments as $comment){// ->tutoFromCity is user define fun() in City.php model, auto call in Laravel
        echo $comment->content . '</strong><br>';
    }
});

// ----------For users table,
Route::get('/user/insert',function(){
    // Insert Data Using Model as obj style method , Using Model file
    // $user = new User;

    // $user->name = 'Waifer Kolar';
    // $user->email = 'waifer@gmail.com';
    // $user->password = Hash::make('123');

    // $user->save();

    // Insert data using mass create() method,
    $pass = Hash::make('123');
    User::create(['name'=>'ThuYein','email'=>'thuyein@gmail.com','password'=>$pass]);
});

?>