<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalQuantity = BillDetail::sum('quantity');
        $totalPrice = BillDetail::sum(\DB::raw('quantity * price'));
        $totalUsers = Bill::distinct('user_id')->count('user_id');

        $mostPurchasedProducts = BillDetail::select(
            'product_id',
            \DB::raw('SUM(bill_details.quantity) as total_quantity'),
            \DB::raw('SUM(bill_details.quantity * bill_details.price) as total_price')
        )
            ->join('products', 'bill_details.product_id', '=', 'products.id')
            ->groupBy('bill_details.product_id')
            ->orderByDesc('total_quantity')
            ->take(5)
            ->get();

        $products = [];
        foreach ($mostPurchasedProducts as $item) {
            $product = Product::findOrFail($item->product_id);
            $products[] = [
                'image' => $product->image,
                'name' => $product->name,
                'price' => number_format($product->price),
                'total_quantity' => number_format($item->total_quantity),
                'total_price' => number_format($item->total_price),
            ];
        }

        $formatQuantity = number_format($totalQuantity);
        $formatPrice = number_format($totalPrice);
        $formatUsers = number_format($totalUsers);

        return view('admin.statistic.index', compact('formatQuantity', 'formatPrice', 'formatUsers', 'products'));
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
}