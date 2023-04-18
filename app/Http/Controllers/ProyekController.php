<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $proyek_list;
    public function __construct(){
        $this->proyek_list = Proyek::all();
    }
    public function index()
    {
        $data = [
            'proyeks' => $this->proyek_list
        ];
        return view('proyek.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('proyek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Proyek::insert([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline
        ]);
        return redirect(route('proyek.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyek $proyek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyek $proyek)
    {
        $data = [
            'proyek' => $proyek,
        ];
        return view('proyek.update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyek $proyek)
    {
        Proyek::firstWhere('id', $proyek->id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline
        ]);
        return redirect(route('proyek.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyek $proyek)
    {
        Proyek::firstWhere('id', $proyek->id)->delete();
        return redirect(route('proyek.index'));
    }
}
