Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Andi']); 
    });
     