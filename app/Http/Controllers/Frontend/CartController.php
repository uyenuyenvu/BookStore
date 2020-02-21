<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $cart=Cart::content();
        return view('frontend.page.cart')->with([
            'cart'=>$cart
        ]);
    }
    public function add($id){
        $book=Book::find($id);
        Cart::add($book->id,$book->name,1,$book->sale_price,0);
//        dd("ádfghg");
        return redirect()->back();
    }
    public function remove($id){
        Cart::remove($id);
        return redirect(route('frontend.home.showCart'));
    }
    public function inc($id){
        $qty=Cart::get($id)->qty;
        $book=Book::find(Cart::get($id)->id);
//        dd($book->number_import);
        if($qty<$book->number_import){
            Cart::update($id,$qty+1);
        }
        return redirect(route('frontend.home.showCart'));
    }
    public function dec($id){

        $qty=Cart::get($id)->qty;
        $book=Book::find(Cart::get($id)->id);
        if($qty===1){
            Cart::remove($id);
        }else{
            Cart::update($id,$qty-1);
        }
        return redirect(route('frontend.home.showCart'));
    }
}
