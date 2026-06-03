<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function show(Keluhan $keluhan)
    {
        $keluhan = Keluhan::with('pelapor')
            ->where('id', $keluhan->id)
            ->first();

        return $keluhan;
    }
}