<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Psy\CodeCleaner\FunctionContextPass;

class ProductController extends Controller
{   

    // show explore product
    // public function explore()
    // {
    //     $products = Product::all()->filter(request(['search']));
    //     return view('explore', compact('products'));
    // }

    // index page
    public function index(){
        $products = Product::latest()->take(5)->get();
        return view('index', ['products' => $products, 'search' =>'']);
    }
    
// explore page
    public function explore(Request $request) {
        $searchTerm = $request->input('search');
        $searchTerm2 = $request->input('search2');
        
        $products = Product::where(function ($query) use ($searchTerm, $searchTerm2) {
            $query->where(function ($query) use ($searchTerm) {
                $query->where('title_service', 'like', '%' . $searchTerm . '%')
                    ->orWhere('service_description', 'like', '%' . $searchTerm . '%')
                    ->orWhere('service_category', 'like', '%' . $searchTerm . '%');
            })
            ->where('kota', 'like', '%' . $searchTerm2 . '%');
        })
        ->get();
        
        return view('explore', ['products' => $products, 'search' => $searchTerm, 'search2' => $searchTerm2]);
    }
    
    
    

    // create product
    public function create(Request $request){
        $image = $request->file('image');
    
        return view('befreelancer');
    }
    

    // store product data
    public function store(Request $request)
{
    $request->validate([
        'title_service' => 'required|string',
        'price' => 'required|integer',
        // 'image' => 'nullable|image|max:2048',
    ]);

    $product = new Product;
    $product->user_id = $request->user_id;
    $product->title_service = $request->title_service;
    $product->service_method = $request->service_method;
    $product->price = $request->price;
    $product->price2 = $request->price2;
    $product->price3 = $request->price3;
    $product->service_time = $request->service_time;
    $product->service_time2 = $request->service_time2;
    $product->service_units_time = $request->service_units_time;
    $product->service_units_time2 = $request->service_units_time2;
    $product->service_description = $request->service_description;
    $product->kota = $request->kota;
    $product->kecamatan = $request->kecamatan;
    $product->jalan = $request->jalan;
    $product->package_des = $request->package_des;
    $product->package_des2 = $request->package_des2;
    $product->package_des3 = $request->package_des3;
    $product->service_category = $request->service_category;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('public/images');
        $product->image = str_replace('public/images/', '', $imagePath);
    }
    
    if ($request->hasFile('image2')) {
        $imagePath2 = $request->file('image2')->store('public/images');
        $product->image2 = str_replace('public/images/', '', $imagePath2);
    }
    
    if ($request->hasFile('image3')) {
        $imagePath3 = $request->file('image3')->store('public/images');
        $product->image3 = str_replace('public/images/', '', $imagePath3);
    }
    
    if ($request->hasFile('image4')) {
        $imagePath4 = $request->file('image4')->store('public/images');
        $product->image4 = str_replace('public/images/', '', $imagePath4);
    }

    $product->save();

    return redirect()->route('profile')->with('success', 'Product created successfully.');
}



    // show product
    public function show(Product $product)
    {
        $user = $product->user;
        return view('service-detail', compact('product'), ['product' => $product, 'user' => $user] );
    }

    public function sellerProfile(Product $product)
    {
        $user = $product->user;
        return view('seller-profile', compact('product'), ['product' => $product, 'user' => $user] );
    }


    // cart
    function addToCart(Request $request)
    {
           $cart= new Cart;
           $cart->user_id = $request->user_id;
           $cart->price=$request->price;
           $cart->price2=$request->price2;
           $cart->price3=$request->price3;
           $cart->product_id=$request->product_id;
           $cart->title_service=$request->title_service;
           $cart->image=$request->image;
           $cart->service_method=$request->service_method;
           $cart->save();
           return redirect('/cart');
    }

    // show cart
    public function cart(Cart $cart)
    {
        $carts = Cart::latest()->get();
        return view('cart', ['carts' => auth()->user()->carts()->get()]);
    }

    // delete cart
    public function destroyFromCart(Request $request)
    {
        $cart_id = $request->cart_id;
        $cart = Cart::findOrFail($cart_id);
        $cart->delete();

        return redirect('/cart');
    }

     // show cart
     public function pay(Cart $cart)
     {
         $carts = Cart::latest()->get();
         return view('payment', ['carts' => auth()->user()->carts()->get()]);
     }


     // order
    function addToOrder(Request $request)
    {
           $order= new Order;
           $order->user_id = $request->user_id;
           $order->price=$request->price;
           $order->product_id=$request->product_id;
           $order->title_service=$request->title_service;
           $order->image=$request->image;
           $order->service_method=$request->service_method;
           $order->save();
           return redirect('/order');
    }

    // show order
    public function order(Cart $cart)
    {
        $orders = Order::latest()->get();
        return view('order', ['orders' => auth()->user()->orders()->get()]);
    }

    // delete order
    public function destroyFromOrder(Order $order)
    {
        $order->delete();
        return redirect('/order');
    }

    // users services
    public function profile() {
        return view('user-profile', ['products' => auth()->user()->products()->get()]);
    }

    // manage services
    public function manage() {
        return view('manage', ['products' => auth()->user()->products()->get()]);
    }

    // show edit page
    public function edit($id)
    {
        $product = Product::find($id);

        return view('edit', compact('product'));
    }
    // update
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title_service' => 'required|string',
            'price' => 'required|integer',
            // 'image' => 'nullable|image|max:2048',
        ]);
    
        $product->user_id = $request->user_id;
        $product->title_service = $request->title_service;
        $product->service_method = $request->service_method;
        $product->price = $request->price;
        $product->price2 = $request->price2;
        $product->price3 = $request->price3;
        $product->service_time = $request->service_time;
        $product->service_time2 = $request->service_time2;
        $product->service_units_time = $request->service_units_time;
        $product->service_units_time2 = $request->service_units_time2;
        $product->service_description = $request->service_description;
        $product->kota = $request->kota;
        $product->kecamatan = $request->kecamatan;
        $product->jalan = $request->jalan;
        $product->package_des = $request->package_des;
        $product->package_des2 = $request->package_des2;
        $product->package_des3 = $request->package_des3;
        $product->service_category = $request->service_category;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $product->image = str_replace('public/images/', '', $imagePath);
        }
        
        if ($request->hasFile('image2')) {
            $imagePath2 = $request->file('image2')->store('public/images');
            $product->image2 = str_replace('public/images/', '', $imagePath2);
        }
        
        if ($request->hasFile('image3')) {
            $imagePath3 = $request->file('image3')->store('public/images');
            $product->image3 = str_replace('public/images/', '', $imagePath3);
        }
        
        if ($request->hasFile('image4')) {
            $imagePath4 = $request->file('image4')->store('public/images');
            $product->image4 = str_replace('public/images/', '', $imagePath4);
        }
    
        $product->save();
    
        return redirect()->route('profile')->with('success', 'Product created successfully.');
    }

    // delete service
    public function destroy(Product $product) {
        $product->delete();
        return redirect('/manage')->with('message', 'Listing Deleted Succesfully');
    }

    public function sort(Request $request)
    {
        $sortBy = $request->input('sort');
        $searchTerm = $request->input('search');
        $search2Term = $request->input('search2');
        
        $query = Product::where(function ($query) use ($searchTerm, $search2Term) {
            $query->where('title_service', 'like', '%' . $searchTerm . '%')
                ->orWhere('service_description', 'like', '%' . $searchTerm . '%')
                ->orWhere('service_category', 'like', '%' . $searchTerm . '%');
            
            if ($search2Term) {
                $query->where('kota', 'like', '%' . $search2Term . '%');
            }
        });

        switch ($sortBy) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'created_at_asc':
                $query->orderBy('created_at', 'asc');
                break;
            case 'created_at_desc':
                $query->orderBy('created_at', 'desc');
                break;
            default:
                // No specific sorting selected, use default ordering
                $query->orderBy('created_at', 'desc');
                break;
        }

        $products = $query->get();
        
        return view('explore', ['products' => $products, 'search' => $searchTerm, 'search2' => $search2Term, 'sort' => $sortBy]);
    }


}
