<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Register;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $registers = Register::all();
        return view('dashboard', ['registers' => $registers]);
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        Register::create($request->all());
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        Register::where('id', $id)->delete();
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $register = Register::where('id', $id)->first();
        if (!empty($register)) {
            return View('crud.edit', ['register' => $register]);
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'tipo' => $request->tipo,
            'nome' => $request->nome,
            'valor' => $request->valor,
            'categoria' => $request->categoria,
        ];
        Register::where('id', $id)->update($data);
        return redirect()->route('dashboard');
    }
}
