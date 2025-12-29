<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class DestinationController extends Controller
{
    public function index(Request $request){
        // dd($request->search);
        if (!empty($request->search)) {
            $datas = Destination::where('nama_kota', 'like', '%' . $request->search . '%')->latest()->paginate(5);
        }else{

            $datas = Destination::latest()->paginate(5);
        }
        return view('admin-page.destinations.destination',compact('datas'));
    }

    public function submit(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_kota' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'harga' => 'required|numeric',
            'no_telp_outlet' => 'required|numeric',
        ]);
        
        if($validator->fails()){
            $messages = $validator->messages();
            $alertMessage = $messages->first(); 
            return back()->with(['error' => $alertMessage]);
        }

        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());
        Destination::create([
            'nama_kota' => $request->nama_kota,
            'description' => $request->description,
            'image' => $image->hashName(),
            'harga' => $request->harga,
            'no_telp_outlet' => $request->no_telp_outlet
        ]);

        return redirect('/admin/destinations')->with('success', 'Data Berhasil Dibuat.');
    }

    public function edit($id){
        $data = Destination::find($id);
        return view('admin-page.destinations.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'nama_kota' => 'string',
            'description' => 'string',
            'image' => 'image|mimes:jpeg,jpg,png',
            'harga' => 'numeric',
            'no_telp_outlet' => 'numeric',
        ]);
        
        if($validator->fails()){
            $messages = $validator->messages();
            $alertMessage = $messages->first(); 
            return back()->with(['error' => $alertMessage]);
        }

        $destinasi = Destination::find($id);
        $data = [
            'nama_kota' => $request->nama_kota,
            'description' => $request->description,
            'harga' => $request->harga,
            'no_telp_outlet' => $request->no_telp_outlet
        ];
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = $image->hashName();
            $image->storeAs('public/image', $data['image']);
        }    

        $destinasi->update($data);

        return redirect('/admin/destinations')->with('success', 'Data Berhasil Diupdate.');
    }
    
    public function delete($id){
        $data = Destination::find($id);
        $data->delete();
        return redirect('/admin/destinations')->with('success', 'Data Berhasil Dihapus.');
    }

    public function index_user(Request $request){
        $query = Destination::query();

        if ($request->budget == 'high-to-low') {
            $query->orderBy('harga', 'desc');
        }
        if ($request->budget == 'low-to-high') {
            $query->orderBy('harga', 'asc');
        }
        if ($request->date) {
            $query->whereDate('created_at', $request->date);
        }
        $data = $query->get();
        return view('landing-page.destinations', compact('data'));
    }

    public function search(Request $request){
        $query = Destination::query();

        if ($request->budget == 'high-to-low') {
            $query->orderBy('harga', 'desc');
        }
        if ($request->budget == 'low-to-high') {
            $query->orderBy('harga', 'asc');
        }
        if ($request->date) {
            $query->whereDate('created_at', $request->date);
        }
        $data = $query->get();
        return view('landing-page.destinations', compact('data'));

    }

    public function booking($id){
        $data = Destination::find($id);
        return view('landing-page.booking',compact('data'));
    }


}
