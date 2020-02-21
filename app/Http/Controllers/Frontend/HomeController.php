<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $arr=['1','2','3','4'];
//        $users=User::all();
//        Cache::put('menu',$users);
//        $users=Cache::forget('menu');
//
//        $users=Cache::get('menu');
//
//        dd($users);
//        $value=Cache::get('menu');
//        if(Cache::has('mednu')){
//            dd($value);
//        }else{
//            dd('default');
//        }
//        dd($value);

//        $number=Cache::increment('number',1);
//        dd($number);
//
//        $users=Cache::remember('users',60,function(){
//            return User::all();
//        });
//        dd($users);

//        Storage::deleteDirectory('newFolder');
//        dd('ok');
//         Storage::disk('local2')->delete('app2/fileTest.txt');
////        return Storage::disk('local2')->download('app2\fileTest.txt','file.txt');
//        dd(1);
////        Auth::logout();
////        dd(1)   ;
//        \session(['1'=>1,'2'=>2]);
//        session('111','value');
//        dd($save);
//        \Session::put('age','aaaaa');
//        \session()->forget('age');
//        dd(\session()->all());
//        if (session()->has('age')) {
//            dd('co');
//        }else{
//            dd('khong');
//        }
//        dd(session()->get('1'));
        //cookie
//        return response('hello')->cookie('giohang1','1',10);
//         $cookie =cookie('giohang2','1',10);
//         return response('helooo')->cookie($cookie);
//        Cookie::queue('user_id',1);
//        Cookie::queue('email','uyen@gmail.com');
//        $value=Cookie::get('email');
//        echo $value;
//        return 1;

            $books = \DB::table('books')->paginate(10);

        return view('frontend.page.index')->with([
            'books'=> $books
        ]);

//        return view('frontend.page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBook($slug)
    {
        $book = Book::where('slug',$slug)->first();
//        dd($book);
        $user = Auth::user();
        $seller = \App\User::find($book->user_id);
        $category = Category::find($book->category_id);
        $images = $book->Images;
//        dd($images);
        if($user!=null) {
            if ($user->role == 1) {
                return view('frontend.page.detail')->with([
                    'book' => $book,
                    'user' => $user,
                    'seller' => $seller,
                    'category' => $category,
                    'images' => $images
                ]);
            } else {
                return view('backend.products.show')->with([
                    'book' => $book,
                    'user' => $user,
                    'seller' => $seller,
                    'category' => $category,
                    'images' => $images
                ]);
            }
        }else{
            return view('frontend.page.detail')->with([
                'book' => $book,
                'seller' => $seller,
                'category' => $category,
                'images' => $images
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function showBooksByCategory($slug){
        $category=Category::where('slug',$slug)->first();
//        dd($category);
        $books=$category->Books;
//        dd($books);
        return view('frontend.page.showBooksByCategory')->with([
            'books'=>$books,
            'category'=>$category
        ]);


    }
    //hiển thị trang about
    public function about(){
        return view('frontend.page.about');
    }
    public function showCart(){
        return view('frontend.page.cart');
    }
    public function contact(){
        return view('frontend.page.contact
        ');
    }

}
