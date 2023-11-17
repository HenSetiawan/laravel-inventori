<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index (Request $request) {
        if($request->has('search')){
            $suppliers = Supplier::where('name', 'LIKE' ,"%{$request->search}%")->paginate(10);
        } else {
            $suppliers = Supplier::paginate(10);
        }
        return view('dashboard.supplier.index', ['suppliers'=> $suppliers]);
    }

    public function delete ($id) {
        $supplier = Supplier::findOrFail($id);
        $deletedSupplier = $supplier->delete();

        if($deletedSupplier){
            session()->flash('message', 'berhasil menghapus data');
            return response()->json(['message'=> 'success'],200);
        }
    }

    public function create () {
        return view('dashboard.supplier.input');
    }

    public function store (Request $request) {
        $this->validate($request, [
            'name'=> ['required'],
            'address'=>['required'],
            'email'=>['required'],
            'phone'=>['required'],
        ]);

        $createdSupplier = Supplier::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);

        if($createdSupplier){
            return redirect('/supplier')->with('message', 'berhasil menambahkan data');
        }
    }

    public function edit($id) {
        $supplier = Supplier::findOrFail($id);
        return view('dashboard.supplier.update',['supplier'=>$supplier]);
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'name'=> ['required'],
            'address'=>['required'],
            'email'=>['required'],
            'phone'=>['required'],
        ]);

        $supplier = Supplier::findOrFail($id);
        $updated = $supplier->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);

        if($updated){
            return redirect('/supplier')->with('message', 'berhasil mengubah data');
        }
    }

    public function getAllSuppliers () {
        $supplier = Supplier::all();
        return response()->json(['data' => $supplier], 200);
    }
}
