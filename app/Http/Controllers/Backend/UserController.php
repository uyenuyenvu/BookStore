<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//       $users=\DB::table('users')->get();

        $users = \DB::table('users')->paginate(10);

        return view('backend.users.index')->with([
            'users'=>$users
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
        $this->authorize('create',User::class);

//        $this->authorize('create', $user);
        return view('backend.users.create')->with([
            'user'=>Auth::user()
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
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
//        $user->status=1;
        $user->role=1;
        $avatar=$request->file('avatar');
        $avatar->store('image');

        $name = date('YmdHis') ."." . $avatar->getClientOriginalExtension();
        $avatar->move('backend/dist/img',$name);
        $user->avatar=$name;
        $user->password = md5($request->password);

        $user->save();
//        dd($user->name);
        if(Auth::user()->role=2) {
            return redirect()->route('backend.user.show', $user->id);
        }else{
            return redirect()->route('frontend.home.showAccount',$user->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        $shop=Shop::where('user_id',$id)->first();
//        dd($shop);
        return view('backend.users.show')->with([
            'userr'=>$user,
            'shop'=>$shop,
            'user'=>Auth::user()
        ]);
    }
    public function showShop($id)
    {
        $shop=Shop::find($id);
        $user=User::find($shop->user_id);
        return view('backend.users.show')->with([
            'userr'=>$user,
            'shop'=>$shop,
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
        $user=User::find($id);
        $this->authorize('edit',$user);
        //nếu người dùng role=1 thì trả về giao diện khác
        if($user->role==1){
            return view('frontend.page.editAccount')->with([
                'user'=>$user
            ]);
        }
        return view('backend.users.edit')->with([
            'user'=>$user
        ]);
    }

    //show danh sach book cua nguoi dung da dang
    //truyen vao user_id
    public function showBooks($id){
        $user=User::find($id);
        $books=$user->books;
        return view('backend.users.showBooks')->with([
            'books'=>$books
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
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $avatar=$request->file('avatar');
        $avatar->store('image');
        $name = date('YmdHis') ."." . $avatar->getClientOriginalExtension();
        $avatar->move('backend/dist/img',$name);
        $user->avatar=$name;
        if($request->password !='null') {
            $user->password = md5($request->password);
        }
        $user->save();
//        dd($user->name);
        if($user->role=2) {
            return redirect()->route('backend.user.show', $user->id);
        }else{
            return redirect()->route('frontend.home.showAccount',$user->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $this->authorize('delete',$user);
//        dd($user);
        $user->delete();
        return redirect('/admin/users');

    }
    public function formUpgrade($id){
        return view('frontend.page.upgrade')->with([
            'user'=>Auth::user()
        ]);
    }
    public function storeShop(Request $request){
//        dd("aaaaaaaaaaaaaaaa");
//        dd($request);
        $shop=new Shop();
        $shop->name=$request->name;
        $shop->phone=$request->phone;
        $shop->country=$request->country;
        $shop->address=$request->address;
        $shop->supplier=$request->supplier;
        $shop->status=0;
        if($request->policy) {
            $shop->check_policy = 1;
        }else{
            return redirect()->back();
        }
        $shop->user_id=Auth::user()->id;
        $shop->save();
//        dd($shop);
        Session::put('waite','Yêu cầu của bạn đang đợi quản trị viên phê duyệt',5);
        return redirect('/home');

    }
    public function listUpgrade(){
//        $this->authorize('delete',User::class);

        $list=Shop::where('status','0')->get();
        return view('backend.users.listUpgrade')->with([
            'list'=>$list,
            'user'=>Auth::user()
        ]);
    }
    public function listShop(){
        $list=Shop::where('status','1')->get();
        return view('backend.users.listShop')->with([
            'list'=>$list,
            'user'=>Auth::user()
        ]);
    }
    public function listDeletedShop(){
        $user=Auth::user();
        $this->authorize('delete',User::class);

        $list=Shop::where('status','2')->get();
        return view('backend.users.listDeletedShop')->with([
            'list'=>$list,
            'user'=>Auth::user()
        ]);
    }

    public function upgrade($id){
//        $this->authorize('delete', User::find($id));

        $shop=Shop::find($id);
        $shop->status=1;
        $user=User::find($shop->user_id);
//        $this->authorize('delete',$user);

        $user->role=2;
        $user->save();
        $shop->save();
        return redirect()->back();
    }
    public function destroyShop($id){
        $this->authorize('delete', User::find($id));
        $shop=Shop::find($id);
        $shop->status=2;
        $user=User::find($shop->user_id);
        $user->role=1;
        $user->save();
        $shop->save();
        return redirect()->back();
    }
}
