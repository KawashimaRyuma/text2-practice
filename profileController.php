<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
    //
public function add()
{
    return view('admin.profile/create');
}
public function create()
{
    return redirect('admin/profile/create'):
}
public function view('admin.profile.edit');
{
    return view('admin.profile.edit');
}
public function update()
{
    return redirect('admin/profile/edit');
}