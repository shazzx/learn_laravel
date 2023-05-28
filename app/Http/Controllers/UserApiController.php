<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DB::select("SELECT * FROM users");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return DB::insert("INSERT INTO users (username) value (?)", [$request->input('username')]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DB::select("SELECT * FROM users WHERE id = ?", [$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return DB::update("UPDATE users SET username = ? WHERE id = ?", [$request->input("username"), $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return DB::delete("DELETE FROM users WHERE id = ?", [$id]);
    }
}
