<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class InsertController extends Controller
{
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {
        return view('insert');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:1000', 'max:10000000'],
            'stock' => ['required', 'numeric', 'min:1'],
            'image' => ['required']
        ]);

        $fileNameWithExt = $request->file('image')->getClientOriginalName();
        $ext = $request->file('image')->getClientOriginalExtension();
        $storedFile = $fileNameWithExt.'_'.time().'.'.$ext;
        $path = $request->file('image')->storeAs('public/images', $storedFile);

        $barang = new Barang;
        $barang->nama_barang = $request->name;
        $barang->keterangan = $request->description;
        $barang->harga = $request->price;
        $barang->stok = $request->stock;
        $barang->barang_image = '/storage/images/'.$storedFile;
        $barang->save();

        return redirect('/home')->with('success', 'Product Created Successfully');
    }
}
