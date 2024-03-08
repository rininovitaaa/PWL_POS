<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserContorller extends Controller
{
    public function index()
    {
   $data =[
         
       'username' => 'customer-1',
        'nama' => 'Pelanggan Pertama', 
        'password' => Hash::make('12345'),
        'level_id' => 4   
   ];
    UserModel::insert($data);
    $user = UserModel::all();
    return view('user', [ 'data' => $user]);
}
}
