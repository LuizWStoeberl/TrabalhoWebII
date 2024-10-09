<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contato extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->route('pagicontatos')->with('sucess', 'Mensagem enviada com sucesso!');
    }
}
