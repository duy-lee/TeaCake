<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
use App\LoaiSP;
use App\Cart;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loaisp = LoaiSP::all();
            $view->with('loaisp',$loaisp);
        });

        view()->composer('master',function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'sanpham_cart'=>$cart->itemSP, 'tongTien'=>$cart->tongTien, 'tongSo'=>$cart->tongSo]);
            }
        });
        view()->composer('header',function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'sanpham_cart'=>$cart->itemSP, 'tongTien'=>$cart->tongTien, 'tongSo'=>$cart->tongSo]);
            }
        });
        
    }
}
