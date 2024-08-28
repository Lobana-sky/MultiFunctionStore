<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\AppOrder;
use Illuminate\Support\Facades\DB;

class AppOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appOrders=DB::table('appOrders')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.appOrders.index', compact('appOrders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.appOrders.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        AppOrder::create($input);
        return back()->with('message', 'تمت اضافة العميل بنجاح');
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
        $appOrder = AppOrder::findOrFail($id);
        $input = $request->all();
       
        $appOrder->update([
           'app_id' => $input['app_id'],
           'user_id' => $input['user_id'],
           'count' => $input['count'],
        ]);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $appOrder= AppOrder::findOrFail($id);
        $appOrder->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
