<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = \DB::table('categories')->paginate(10);
        $user=Auth::user();
//        $categories = Cache::remember('categories',60*60*24,function(){
//            return \DB::table('categories')->paginate(10);
//        });
        return view('backend.categories.index')->with([
            'category'=>$categories,
            'user'=>$user
        ]);
    }
    //show san pham theo category, truyen vao id cua category
    public function showBooks($id){
        $category=Category::find($id);
        $books=$category->Books;
        return view('backend.categories.showBooks')->with([
            'books'=>$books,
            'user'=>Auth::user(),
            'category'=>$category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \DB::table('categories')->get();
        $user=Auth::user();
//        dd($categories);

        return view('backend.categories.create')->with([
            'categories'=>$categories,
            'user'=>$user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
//        dd($request);
//        $categories = \DB::table('categories')->get();
//
//        $validator=Validator::make($request->all(),[
//            'name'=>'required|min:5|max:225'
//        ],[
//            'required'=>':attribute không được để trống',
//            'min'=>':attribute không nhỏ hơn',
//            'max'=>':attribute không lớn hơn '
//        ],[
//            'name'=>'tên sản phẩm'
//        ]);
//        if ($validator->errors()){
//            return view('backend.category.create')
//                ->withErrors($validator)
//                ->withInput()
//                ->with([
//                    'categories'=>$categories,
//                    'user'=>Auth::user()
//                ]);
//        }
        $category=new Category();
        $category->name=$request->name;
        $category->description=$request->description;
        $category->slug = \Illuminate\Support\Str::slug($request->get('name'));
        if($request->parent_id==0){
            $category->depth=1;
        }else{
         $parent=Category::find($request->parent_id);
         $category->depth=$parent->depth+1;
         $category->parent_id=$request->parent_id;
        }
//        dd($category);
        $category->status=0;
        $thumbnail=$request->file('image');
//        dd($thumbnail);
        $thumbnail->store('image');
        $name = date('YmdHis') ."." . $thumbnail->getClientOriginalExtension();
        $thumbnail->move('backend/dist/img',$name);
        $category->thumbnail=$name;
        $category->save();
        return redirect()->route('backend.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=Category::find($id);
        return view('backend.categories.show')->with([
            'category'=>$category,
            'user'=>Auth::user()
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

        $category=Category::find($id);
        $user=Auth::user();
        return view('backend.categories.edit')->with([
            'category'=>$category,
            'categories'=>$categories,
            'user'=>$user
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
            'name'         => 'required|min:5|max:255',
            'description' => 'required',
            'parent_id'   => 'required|numeric',
        ]);
        $category=Category::find($id);
        $category->name=$request->name;
        $category->description=$request->description;
        $category->slug = \Illuminate\Support\Str::slug($request->get('name'));
        if($request->parent_id==0){
            $category->depth=1;
        }else{
            $parent=Category::find($request->parent_id);
            $category->depth=$parent->depth+1;
            $category->parent_id=$request->parent_id;
        }
        $thumbnail=$request->file('image');
        $thumbnail->store('image');
        $name = date('YmdHis') ."." . $thumbnail->getClientOriginalExtension();
        $thumbnail->move('backend/dist/img',$name);
        $category->thumbnail=$name;
//        dd($category);
//        $category->save();
        $save = $category->save();

        if ($save)
            $request->session()->flash('success', 'Cập nhật thành công');
        else
            $request->session()->flash('error', 'Cập nhật thất bại');
        return redirect()->route('backend.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $book=$category->Books;
        if(count($book)>0){
            Session::put('errDeleteCategory','xóa không thành công, vui lòng xóa hết sản phẩm thuộc danh mục này trước');
            return redirect()->back();
        }
        $cate=Category::where('parent_id',$category->id)->get();
        if(count($cate)>0){
            Session::put('errDeleteCategory','xóa không thành công, vui lòng xóa hết danh mục con thuộc danh mục này trước');
            return redirect()->back();
        }
        $category->delete();
        return redirect()->back();
    }
}
