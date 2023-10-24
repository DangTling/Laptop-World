<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\Orders_Detail;
use App\Models\Products;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('q');
        $data = Orders::query()->where(column: 'receiver_phone_number', operator: 'like',  value: '%' . $search . '%')->paginate(5);
        $statusMapping = [
            0 => 'Pending',
            1 => 'Accepted',
            2 => 'Cancelled',
        ];
        return view('admin.orders.index', [
            'data' => $data,
            'search' => $search,
            'statusMapping' => $statusMapping,
        ]);
    }

    public function accept(Orders $orders)
    {
        if ($orders->status === 0) {
            $orders->status = 1;
            $orders->save();
            return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được chấp nhận.');
        } else {
            return redirect()->route('orders.index')->with('error', 'Không thể chấp nhận đơn hàng này.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrdersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        $orderDetails = Orders_Detail::where('order_id', $orders->id)->get();
        $productDetails = [];

        foreach ($orderDetails as $detail) {
            $product = Products::find($detail->product_id);

            if ($product) {
                $productDetails[] = [
                    'product' => $product,
                    'quantity' => $detail->quantity,
                ];
            }
        }
        return view('admin.orders.detail', [
            "order_detail" => $productDetails,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrdersRequest $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        $orders->delete();
        Orders_Detail::query()->where('order_id', $orders->id)->delete();

        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã bị hủy bỏ');
    }
}
