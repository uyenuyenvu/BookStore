<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(10);
        $user=Auth::user();

        return view('backend.products.index')->with([
            'books'=> $books,
            'user'=>$user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Auth::user();
//        dd($user);
        if($user->can('create'))
        $this->authorize('create',Book::class);
        return view('backend.products.create')->with([
            'user'=>$user
        ]);

//        if ($user->can('update')) {
//            return view('backend.products.create');
//
//        }else{
//            return abort('404');
//        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


//            $path = Storage::disk('public')->putFile('images', $request->file('images'));
//            $file = $request->file('images');
//            $name = $file->getClientOriginalName();
//            $file->move('image_2', $name);


//        $validatedData = $request->validate([
//            'images'=>'required|image|max:1024',
//            'name'=>'required|min:10|max:50',
//            'origin_price' => 'required|numeric',
//            'sale_price' => 'required|numeric',
//            'category_id'=>'required',
//            'author'=>'required',
//            'publisher'=>'required',
//            'content'=>'required'
//        ]);
//
        $book = new Book();
        $book->name = $request->get('name');
//        $book->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $book->category_id = $request->get('category_id');
        $book->origin_price = $request->get('origin_price');
        $book->sale_price = $request->get('sale_price');
        $book->content = $request->get('content');
        $book->publisher = $request->get('publisher');
        $book->author=$request->get('author');

//        $book->status = 0;
        $book->user_id = Auth::user()->id;
        $book->save();
        $img=new Image();
        $images = $request->file('images');
        $path = "backend/dist/img";
        $i=0;
        foreach ($images as $image){
            $img=new Image();
            $i++;
            $image->store('image');
            $name = date('YmdHis') . $i."." . $image->getClientOriginalExtension();
            $image->move($path, $name);
            $img->name=$name;
            $img->folder=$path;
            $img->parent_id=$book->id;
             $img->save();
        }

        $save=1;
        if($save){
            $request->session()->flash('succes','tao moi thanh cong');
        }else{
            $request->session()->flash('succes','tao moi khong thanh cong');
        }

        return redirect()->route('backend.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book=Book::find($id);
        $user=Auth::user();
        $seller=User::find($book->user_id);
        $category=Category::find($book->category_id);
        $images=$book->Images;
//        dd($images);
        if($user->role==1){
        return view('frontend.page.showBooks')->with([
            'book'=>$book,
            'user'=>$user,
            'seller'=>$seller,
            'category'=>$category,
            'images'=>$images
        ]);}else{
            return view('backend.products.show')->with([
                'book'=>$book,
                'user'=>$user,
                'seller'=>$seller,
                'category'=>$category,
                'images'=>$images
            ]);
        }
    }

    public function show_images($id){
        $book=Book::find($id);

        $images=$book->Images;
        return view('backend.products.images')->with([
            'images'=>$images
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = \DB::table('categories')->get();

//        $book=Book::find($id);

        $user=Auth::user();
//    dd($book->id);
        return view('backend.products.edit')->with([
            'book'=>$book,
            'categories'=>$categories,
            'user'=>$user
        ]);


//        if ($user->can('update', $book)) {
//            dd($book);

//            return view('backend.products.edit')->with([
//                'book'=>$book,
//                'categories'=>$categories
//            ]);
//        }else{
//            return abort('404');
//        }

//
//        if (Gate::allows('update-product', $book)){
//            return view('backend.products.edit')->with([
//                'book'=>$book,
//                'categories'=>$categories
//            ]);
//        }else{
//            return abort('404');
//        }

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
        $validatedData = $request->validate([
            'name'=>'required|min:10|max:50',
            'origin_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category_id'=>'required',
            'author'=>'required',
            'publisher'=>'required',
            'content'=>'required'
        ]);

        $book = Book::find($id);
        $book->name = $request->get('name');
//        $book->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $book->category_id = $request->get('category_id');
        $book->origin_price = $request->get('origin_price');
        $book->sale_price = $request->get('sale_price');
        $book->content = $request->get('content');
        $book->publisher = $request->get('publisher');
        $book->author=$request->get('author');

//        $book->status = $request->get('status');
        $book->user_id = Auth::user()->id;
        $book->save();

        return redirect()->route('backend.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
//        $book=Book::find($id);
        $user=Auth::user();
        if ($user->can('delete', $book)) {
            $book->delete();
            return redirect()->route('backend.product.index');
        }else{
            return abort('404');
        }
    }
}
