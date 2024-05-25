<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = Bill::with('billDetails')->paginate(5);

        $bills->transform(function ($bill) {
            $total = $bill->billDetails->sum(function ($billDetail) {
                return $billDetail->quantity * $billDetail->price;
            });
            $bill->total = $total;

            return $bill;
        });

        return view('admin.bill.index', compact('bills'));
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
        $billDetails = BillDetail::paginate(5);
        $billDetails = BillDetail::where('bill_id', $id)->get();
        return view('admin.bill.show', compact('billDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $bill = Bill::findOrFail($id);

        if ($bill->status == 'Chưa duyệt') {
            $bill->status = 'Đã duyệt';
            $bill->save();
            return redirect()->back()->with(['success' => 'Duyệt hoá đơn thành công']);
        } else {
            return redirect()->back()->with(['error' => 'Hoá đơn đã được duyệt']);
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
        $bill = Bill::findOrFail($id);
        $bill->delete();

        return redirect()->back()->with(['success' => 'Xoá hoá đơn thành công']);
    }

    public function billDelete($id)
    {
        $billDetail = BillDetail::findOrFail($id);
        $billDetail->delete();

        return redirect()->back()->with(['success' => 'Xoá chi tiết hoá đơn thành công']);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $bills = Bill::where(function ($query) use ($search) {
            $query->where('status', 'like', "%$search%");
        })->paginate(5);

        $bills->transform(function ($bill) {
            $total = $bill->billDetails->sum(function ($billDetail) {
                return $billDetail->quantity * $billDetail->price;
            });
            $bill->total = $total;

            return $bill;
        });

        return view('admin.bill.index', compact('bills', 'search'));
    }
}