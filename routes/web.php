<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Slide;
use App\LoaiSP;
use Symfony\Component\Console\Input\Input;
use PharIo\Manifest\Type;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $slide = Slide::all();
    $loaisp = LoaiSP::all();
    return view('page/trangchu',compact('slide','loaisp'));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    //Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    //tài khoản-------------
    route::get('/register','AdminController@getDangKy')->name('admin.register');
    route::post('/register','AdminController@postDangKy')->name('admin.register.submit');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    //loại sản phẩm-------------
    Route::match(['get','post'],'/loaisp/themloai', 'AdminController@themLoaiSP')->name('admin.themloai');
    Route::get('/loaisp/xemloai', 'AdminController@xemLoaiSP')->name('admin.xemloai');
    Route::match(['get','post'],'/sualoai/{id}', 'AdminController@suaLoaiSP')->name('admin.sualoai');
    Route::match(['get','post'],'/xoaloai/{id}', 'AdminController@xoaLoaiSP')->name('admin.xoaloai');

    //sản phẩm-------------
    Route::match(['get','post'],'/sanpham/themsanpham', 'AdminController@themSanPham')->name('admin.themsanpham');
    Route::get('/sanpham/xemsanpham', 'AdminController@xemSanPham')->name('admin.xemsanpham');
    Route::match(['get','post'],'/sanpham/suasanpham/{id}', 'AdminController@suaSanPham')->name('admin.suasanpham');
    Route::match(['get','post'],'/sanpham/xoasanpham/{id}', 'AdminController@xoaSanPham')->name('admin.xoasanpham');
    Route::get('/xoa-img-sanpham/{id}', 'AdminController@xoaImgSanPham')->name('admin.xoaimgsanpham');

    //quản lý tài khoản nhân viên
    Route::get('/users/xemtaikhoan', 'AdminController@xemTaiKhoan')->name('admin.xemtaikhoan');

    //xử lý đơn hàng
    Route::get('/don-hang/xu-ly-don-hang', 'AdminController@xuLyDonHang')->name('admin.xulidonhang');
    Route::get('/don-hang/load-don-hang', 'AdminController@loadDonHang')->name('admin.loaddonhang');
    Route::match(['get','post'],'/don-hang/xac-nhan-don-hang/{id}', 'AdminController@xacNhanDonHang')->name('admin.xacnhandonhang');
    Route::match(['get','post'],'/xoadonhang/{id}', 'AdminController@xoaDonHang')->name('xoadonhang');
    Route::get('/don-hang/xem-don-hang-da-duyet', 'AdminController@xemTinhTrangDonHangDaDuyet')->name('xemdonhangdaduyet');
    Route::match(['get','post'],'/don-hang/xac-nhan-don-hang-2/{id}', 'AdminController@xacNhanDonhang2')->name('admin.xacnhandonhang2');
});

Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('dang-ky/',[
    'as'=>'signup-admin',
    'uses'=>'AdminController@getDangKy'
]);

Route::post('dang-ky/',[
    'as'=>'signup-admin',
    'uses'=>'AdminController@postDangKy'
]);

Route::get('loai-san-pham/{type}',[
    'as'=>'loai-san-pham',
    'uses'=>'PageController@getLoaiSanPham'
]);

// Route::get('san-pham-loai/{type}',[
//     'as'=>'san-pham-loai',
//     'uses'=>'PageController@getLoaiSanPham'
// ]);

// Route::group(['prefix' => 'loai-sanpham'], function () {        
    
//     Route::get('/banhkem', function () {   
//         return view('page/sanpham');
//     })->name('banhkem');
// });

Route::get('chitiet-sanpham/{id}',[
    'as'=>'chitiet-sanpham',
    'uses'=>'PageController@getChiTietSanPham'
]);

Route::get('add-cart/{MaSP}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddCart'
]);

Route::get('delete-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDeleteCart'
]);

Route::get('/giohang', 'PageController@gioHang')->name('giohang');
Route::post('/giohang/suasoluong/{id}', 'PageController@suaSoLuongGioHang')->name('suagiohang');

Route::match(['get','post'],'/register', 'PageController@register')->name('user.register');
Route::match(['get','post'],'/khach-hang-login', 'PageController@khachHangLogin')->name('user.KhachHangLogin');
Route::get('/khach-hang-logout', 'PageController@logout')->name('user.logout');

Route::group(['middleware' => 'userlogin'], function () {
    Route::match(['get','post'],'/mua-hang', 'PageController@muaHang')->name('muaHang');
    Route::match(['get','post'],'/order', 'PageController@order')->name('order');
});


Route::get('/tim-kiem', 'PageController@search')->name('search');


