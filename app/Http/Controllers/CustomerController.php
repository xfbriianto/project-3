<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')
                      ->paginate(15);
        
        return view('admin.customer.index', compact('users'));
    }
}