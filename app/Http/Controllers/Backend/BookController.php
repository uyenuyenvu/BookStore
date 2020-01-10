<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
//        dd('store');
        $validatedData = $request->validate([
            'name'=>'required|min:10|max:50',
            'origin_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category_id'=>'required',
            'author'=>'required',
            'publisher'=>'required',
            'content'=>'required'
        ]);

//        $validator = Validator::make($request->all(),
//            [
//                'name'=>'required|min:10|max:50',
//                'origin_price' => 'required|numeric',
//                'sale_price' => 'required|numeric',
//                'category_id'=>'required',
//                'author'=>'required',
//                'publisher'=>'required',
//                'content'=>'required'
//            ],
//            [
//                'required' => ':attribute Không được để trống',
//                'min' => ':attribute Không được nhỏ hơn :min',
//                'max' => ':attribute Không được lớn hơn :max'
//            ],
//            [
//                'name' => 'Tên sản phẩm',
//                'origin_price' => 'Giá gốc',
//                'sale_price' => 'Giá bán',
//                'publisher'=>'Nhà xuất bản',
//                'author'=>'Tác Giả',
//                'content'=>'Phần mô tả',
//                'category_id'=>'danh mục'
//            ]
//        );
//        dd($request);
//        if ($validator->errors()){
////            dd($validator->errors());
//            return back()
//                ->withErrors($validator)
//                ->withInput();
//        }

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
//        dd($book);
        $images=$book->Images;
//        dd($images);
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
