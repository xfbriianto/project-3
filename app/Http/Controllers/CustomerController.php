<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'customer')
                     ->orderBy('created_at', 'desc')
                     ->get();
                     
        return view('admin.customer.index', compact('users'));
    }
}