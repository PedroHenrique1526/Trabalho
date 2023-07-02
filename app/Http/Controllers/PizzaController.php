<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Pizza;
use Illuminate\Http\Request;


class PizzaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edita($id)
    {
        $pizza = Pizza::find($id);
        return view('edita', compact('pizza'));
    }



    public function show()
    {
        $pizzas = Pizza::paginate(8);
        return view('show', compact('pizzas'));
    }

    public function cadastro()
    {
        return view('cadastro');
    }


    public function apaga($id)
    {
        $pizza = Pizza::find($id);
        if ($pizza->getAttributes()['imagem'] != NULL)
            Storage::disk('public')->delete($pizza->getAttributes()['imagem']);
        $delete = $pizza->delete();
        if ($delete)
            return redirect()->route('show')->with('success', 'Pizza removido com sucesso!');
        else
            return redirect()->route('show', $id)->with(['erros' => 'Falha ao remover pizza']);
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token', 'submit');
        $pizza = new Pizza();
        $this->validate($request, $pizza->rules, $pizza->messages);
        if ($request->hasFile('imagem')) { 
            $novoNome = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $novoNome;
        }

        $insert = Pizza::create($dados);
        if ($insert)
            return redirect()->route('show')->with('success', 'Pizza inserida com sucesso!');
        else
            return redirect()->route('cadastro')->with(['error' => 'Falha ao inserir pizza!']);
    }

    public function atualiza(Request $request, $id)
    {
        $dados = $request->except('_token', 'submit');
        $pizza = Pizza::find($id);
        $this->validate($request, $pizza->rules, $pizza->messages);
        if ($request->hasFile('imagem')) {
            if ($pizza->getAttributes()['imagem'] != NULL)
                Storage::disk('public')->delete($pizza->getAttributes()['imagem']);
            $novoNome = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $novoNome;
        } else
            unset($dados['imagem']);
        $update = $pizza->update($dados);
        if ($update)
            return redirect()->route('show')->with('success', 'Pizza atualizado com sucesso!');
        else
            return redirect()->route('edita', $id)->with(['erros' => 'Falha ao editar']);
    }
}
