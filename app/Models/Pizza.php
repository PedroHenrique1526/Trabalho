<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pizza extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $fillable = ['sabor', 'descricao', 'preco', 'imagem'];

    public $rules = [
        'sabor' => 'required|min:3|max:100',
        'preco' => 'required',
        'descricao' => 'required|min:10|max:100',
    ];

    public $messages = [
        'sabor.required' => 'O campo sabor é obrigatório',
        'sabor.min' => 'O campo sabor deve ter no mínimo 3 caracteres',
        'sabor.max' => 'O campo sabor deve ter no mínimo 10 caracteres',
        'preco.required' => 'O campo preço é obrigatório',
        'descricao.required' => 'O campo descrição é obrigatório',
        'descricao.min' => 'O campo descrição deve ter no mínimo 10 caracteres',
        'descricao.max' => 'O campo sabor deve ter no mínimo 10 caracteres'
    ];
}
