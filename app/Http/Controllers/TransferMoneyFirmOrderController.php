<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\TransferMoneyFirmOrder;
use Illuminate\Support\Facades\DB;

class TransferMoneyFirmOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transferMoneyFirmOrders=DB::table('transferMoneyFirmOrders')->select('*')->orderBy('id', 'desc')->paginate(500);
        //User::all()->paginate(500);
        return view('backend.transferMoneyFirmOrders.index', compact('transferMoneyFirmOrders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.transferMoneyFirmOrders.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
       
        TransferMoneyFirmOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transferMoneyFirmOrder = TransferMoneyFirmOrder::findOrFail($id);
        $input = $request->all();
        
        $transferMoneyFirmOrder->update([
           'transfer_money_firm_id' => $input['transfer_money_firm_id'],
           'user_id' => $input['user_id'],
           'sender' => $input['sender'],
           'value' => $input['value'],
           'currency' => $input['currency'],
           'dekont_no' => $input['dekont_no'],
           'password' => $input['password'],
        ]);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transferMoneyFirmOrder= TransferMoneyFirmOrder::findOrFail($id);
        $transferMoneyFirmOrder->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
