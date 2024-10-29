<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     * Menampilkan yang masih kosong
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * Menyimpan DataBase
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Menyimpain detail tapi cuma 1
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Mirip dengan create, edit itu menampilkan form yang udah ada isinya
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Store tambah baru kalau update untuk menyimpan perubahan
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * Menghapus ya
     */
    public function destroy(string $id)
    {
        //
    }
}
