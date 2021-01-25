<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BdatasExport;
use Illuminate\Http\Request;
use App\Models\Bdata;
use Illuminate\Support\Str;
class BdataController extends Controller
{
    public function index()
    {
        $bdatas=Bdata::paginate(10);
        return view('bdatas.index',compact('bdatas'));
    }
    public function create()
    {
        return view('bdatas.create');
    }
    public function show(Bdata $bdata)
    {
        return view('bdatas.show', compact('bdata'));
    }

    public function store(Request $request)
    {
        $length_bill_type = Str::length($request->bill_type);
        $length_bill_code = Str::length($request->bill_code);
        $length_bill_number = Str::length($request->bill_number);
        $length_bill_date = Str::length($request->bill_date);
        $length_bill_price = Str::length($request->bill_price);
        $length_bill_check_number = Str::length($request->bill_check_number);
        $length_bill_owner = Str::length($request->bill_owner);

        $this->validate($request,[
            'bill_type' => 'required|max:2',
            'bill_code' => 'required|max:12',
            'bill_number' => 'required|max:8',
            'bill_date' => 'required|max:12',
            'bill_price' => 'required|max:10',
            'bill_check_number' => 'required|max:6',
            'bill_owner' => 'required|max:124'
        ]);
        $bdata = Bdata::create([
            'bill_type'=>$request->bill_type,
            'bill_code' => $request->bill_code,
            'bill_number' => $request->bill_number,
            'bill_date' => $request->bill_date,
            'bill_price' => $request->bill_price,
            'bill_check_number' => $request->bill_check_number,
            'bill_owner' => $request->bill_owner,
        ]);
        dump($bdata);
//        redirect('/');
        return redirect()->route('bdatas.show',[$bdata]);
    }
    public function export()
    {
        return Excel::download(new BdatasExport, 'bdatas.xlsx');
    }
    public function getBdatasPaginate(Request $request)
    {
        $bdatasPaginate=Bdata::paginate((int)$request->input('limit'));

        $orderFlag=false;

//        $bdatasPaginate=Bdata::orderBy('bill_number')->paginate((int)$request->input('limit'));
        $outputArray=array('code'=>0,'msg'=>'','count'=>Bdata::count(),'data'=>collect($bdatasPaginate->toArray()['data']));
        return json_encode($outputArray);
    }
}
