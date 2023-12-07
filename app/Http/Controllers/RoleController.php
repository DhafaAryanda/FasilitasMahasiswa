<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RoleController extends Controller
{
    function admin()
    {
        echo "<h1>"
        . Auth::user()->name .
        "</h1>";

        echo"<h1>admin</h1>";
        echo "<a href='/logout'> logout  </a>";

    }

    function operator()
    {
        echo "<h1>"
        . Auth::user()->name .
        "</h1>";
        echo"<h1>operator</h1>";

        echo "<a href='/logout'> logout  </a>";

    }

    function mahasiswa()
    {
        echo "<h1>"
        . Auth::user()->name .
        "</h1>";
        echo"<h1>mahasiswa</h1>";

        echo "<a href='/logout'> logout  </a>";

    }

    function umum()
    {
        echo "<h1>"
        . Auth::user()->name .
        "</h1>";
        echo"<h1>umum</h1>";

        echo "<a href='/logout'> logout  </a>";

    }
}
