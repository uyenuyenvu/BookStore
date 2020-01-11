<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $books = \DB::table('books')->paginate(10);
//        $book=Book::find($id);
//
//        $images=$book->Images;

        return view('backend.products.index')->with([
            'books'=> $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create');
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


        $validatedData = $request->validate([
            'images'=>'required|image|max:1024',
            'name'=>'required|min:10|max:50',
            'origin_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category_id'=>'required',
            'author'=>'required',
            'publisher'=>'required',
            'content'=>'required'
        ]);

        $book = new Book();
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
        $img=new Image();
        $images = $request->file('images');
        $path = "backend/dist/img/book";
        $i=0;
        foreach ($images as $image){
            $img=new Image();
            $i++;
            $image->store('image');
            $name = date('YmdHis') . $i."." . $image->getClientOriginalExtension();
            $image          ->move($path, $name);
            $img->name=$name;
            $img->folder=$path;
            $img->parent_id=$book->id;
             $img->save();
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
        //
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
    public function edit($id)
    {
        $categories = \DB::table('categories')->get();

        $book=Book::find($id);
        return view('backend.products.edit')->with([
            'book'=>$book,
            'categories'=>$categories
        ]);
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
    public function destroy($id)
    {
        //
    }
}
