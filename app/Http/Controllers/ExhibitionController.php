<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class ExhibitionController extends Controller
{
    public function list(): View
    {
        return view('exhibition.list', [
            'id' => 1
        ]);
    }
}