<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function search()
    {
        return DataTables::of(User::query())
                ->addColumn('intro', 'Hi {{$name}}!')
                ->addcolumn('image','<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHH8mepO4avVq5NJFuruMoqN02xAqm5Jk7IryH9iVuNw&s" alt="">')
                ->make(true);
    }
}
