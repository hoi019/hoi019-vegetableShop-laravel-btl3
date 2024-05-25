<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $carts = Cart::where('user_id', $userId)->get();

        return view('client.cart.index', compact('carts'));
    }

    public function addToCart(Request $request, $id)
    {
        if (auth()->check()) {
            $product = Product::findOrFail($id);
            $cart = session()->get('cart', []);
            $existingCartItem = Cart::where('user_id', auth()->id())
                ->where('product_id', $id)
                ->first();

            if (isset($cart[$id]) && $existingCartItem) {
                $existingCartItem->increment('quantity');
                $cart[$id]['quantity']++;
                session()->put('cart', $cart);

                return redirect()->back()->with('success', 'Đã thêm sản phẩm vào giỏ hàng');
            } else {
                $cartItem = new Cart([
                    'name_product' => $product->name,
                    'price_product' => $product->price,
                    'image_product' => $product->image,
                    'quantity' => 1,
                    'product_id' => $product->id,
                    'user_id' => auth()->user()->id
                ]);
                $cartItem->save();

                $cart[$id] = [
                    'name' => $product->name,
                    'image' => $product->image,
                    'price' => $product->price,
                    'quantity' => 1,
                ];
            }

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Đã thêm sản phẩm vào giỏ hàng');
        } else {
            return redirect()->route('home')->with('error', 'Bạn cần đăng nhập để có thể thêm sản phẩm vào giỏ hàng');
        }

    }

    public function UpadateToCart(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->update([
            'name_product' => $request->name_product,
            'price_product' => $request->price_product,
            'image_product' => $request->image,
            'quantity' => $request->quantity,
            'product_id' => $request->product_id,
            'user_id' => auth()->user()->id
        ]);
        $cart->save();

        return redirect()->route('carts.index')->with('success', 'Giỏ hàng đã được cập nhật');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $cart = Cart::findOrFail($id);
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->back()->with('success', 'Giỏ hàng đã được cập nhật');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->back()->with('success', 'Đã xoá sản phẩm khỏi giỏ hàng');
    }
}