<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller
{
    public function contact()
    {
        $user=User::get();
        return view('contact.contact', compact('user'));
    }

    public function menu()
    {
        $user=User::get();
        return view('contact.menu', compact('user'));
    }

    public function Acount()
    {
        $user=User::get();
        return view('contact.Acount', compact('user'));
    }
}
