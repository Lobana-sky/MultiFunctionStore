<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\TransferMoneyFirm;
use Illuminate\Support\Facades\DB;

class TransferMoneyFirmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transferMoneyFirms=DB::table('transferMoneyFirms')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.transferMoneyFirms.index', compact('transferMoneyFirms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.transferMoneyFirms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
       
        TransferMoneyFirm::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transferMoneyFirms=DB::table('transferMoneyFirms')->select('*')->where('role',$id)->orderBy('id', 'desc')->paginate(500);
        return view('backend.transferMoneyFirms.users',compact('transferMoneyFirms'));
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
        $transferMoneyFirm = TransferMoneyFirm::findOrFail($id);
        $input = $request->all();
       
        $transferMoneyFirm->update([
           'name' => $input['name'],
           'iban' => $input['iban'],
           'account_name' => $input['account_name'],
        ]);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transferMoneyFirm= TransferMoneyFirm::findOrFail($id);
        $transferMoneyFirm->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
