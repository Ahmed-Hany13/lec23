<?php

use App\Http\Controllers\PageController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'home']);
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

Route::get('posts',function(){
    $post = Post::create([
        'content' => "First title",
        'category_id' => 1,
    ]);
    dd($post);
});
Route::get('cat',function(){
    //Create :-
    //----------

    // $cat = Category::create([
    //     'name' => "second name"
    // ]);
    // dd($cat);




    //Update :-
    //----------

    // $cat = Category::find(4);
    // $cat->update([
    //     'name' => 'Electronics'
    // ]);





    //Delete :-
    //----------

    // $cat = Category::find(4)->delete();

});
