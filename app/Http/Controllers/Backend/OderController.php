<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Detail_oder;
use App\Models\DetailOder;
use App\Models\Detal_oder;
use App\Models\Oder;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class OderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function new(){
        $list=Oder::where([
            'status'=>0
        ])->get();
//        dd($list);
        return view('backend.oders.new')->with([
            'list'=>$list,
            'user'=>Auth::user()
        ]);
    }
    public function approve($id){
        $oder=Oder::find($id);
        return view('backend.oders.approve')->with([
            'oder'=>$oder,
            'user'=>Auth::user()
        ]);
    }
    public function approved(Request $request,$id){
        $oder=Oder::find($id);
        $oder->shop_name=$request->shop_name;
        $oder->shop_phone=$request->shop_phone;
        $oder->shop_address=$request->shop_address;
        $oder->status=1;
        $oder->save();
        return view('backend.oders.detail')->with([
            'oder'=>$oder,
            'user'=>Auth::user()
        ]);
    }
    public function ship($id){
//        return $id;
        $oder = Oder::find($id);
        $oder->status=2;
        $oder->save();
        return view('backend.oders.detail')->with([
            'oder'=>$oder,
            'user'=>Auth::user()
        ]);
    }
    public function finish($id){
        $oder=Oder::find($id);
        $oder->status=3;
        $oder->time_finish=now();
        $oder->save();
        return view('backend.oders.detail')->with([
            'oder'=>$oder,
            'user'=>Auth::user()
        ]);
    }
    public function shipping(){
        $list=Oder::where([
            'status'=>1
        ])->get();
        return view('backend.oders.shipping')->with([
            'list'=>$list,
            'user'=>Auth::user()
        ]);
    }
    public function checkout()
    {
        $user_login=Auth::user();
        $cart=Cart::content();
        if ($user_login===null){
            return redirect('/login');
        }
        return view('frontend.page.checkout')->with([
            'user_login'=>$user_login,
            'cart'=>$cart
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
        $oder=new Oder();
        $oder->status=0;
        $oder->customer_name=$request->customer_name;
        $oder->customer_phone=$request->customer_phone;
        $oder->customer_address=$request->customer_address;
        $oder->mess=$request->mess;
        $oder->total=Cart::total();
        $oder->customer_id=Auth::user()->id;
        $oder->save();

        $cart=Cart::content();
        foreach ($cart as $book){
            $product=new Detail_oder();
            $product->oder_id=$oder->id;
            $product->book_id=$book->id;
            $product->quantity=$book->qty;
            $product->price=$book->price;
            $product->created_at=now();
            $product->save();
        }
        $detail=Detail_oder::where('oder_id',$oder->id);
        Cart::destroy();

        return $this->show($oder->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oder=Oder::find($id);
//        dd($oder);
        $detail=Detail_oder::where('oder_id',$id)->get();
//        dd($detail);
        return view('frontend.page.detailOder')->with([
            'oder'=>$oder,
            'detail'=>$detail
        ]);
    }

    public function showBooks($id)
    {
//        dd('dfghjkl');
        $order = Order::find($id);
        $books = $order->Books;
        return view('backend.order.showBooks')->with(['books'=>$books]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function statistics(){
        $list=[1,2,3,4,5,6,7,8,9];
        return view('backend.statistics.oder')->with([
            'list'=>$list,
            'user'=>Auth::user()
        ]);
    }
}
