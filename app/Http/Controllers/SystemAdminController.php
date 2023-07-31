<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemAdminController extends Controller
{
    public function index()
    {
        return view('User_Interface.systemAd.index');
    }
    public function addUser()
    {
        return view('User_Interface.systemAd.addUser');
    }
    public function updateUser()
    {
        return view('User_Interface.systemAd.updateUser');
    }
    public function removeUser()
    {
        return view('User_Interface.systemAd.removeUser');
    }
    public function pendingRes()
    {
        return view('User_Interface.systemAd.pendingRes');
    }
    public function validatedRes()
    {
        return view('User_Interface.systemAd.validatedRes');
    }
}
