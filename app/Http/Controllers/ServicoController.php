<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{

   /**
    * Lista os serviços
    *
    * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Facatory
    */

    public function index()
    {

       $servicos = Servico::simplePaginate(10);
       //metodo with que passa uma váriavel que tem o conteúdo da váriavel servico
       return view('servicos.index')->with('servicos', $servicos);
    }




    /**
    * Mostra o form fazio para criação
    *
    * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Facatory
    */

    public function create()
    {
      return view('servicos.create');
    }




    /**
    * Cria um novo registro no db
    *
    * @param ServicoRequest $request
    * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
    */

    public function store(ServicoRequest $request)
    {
      $dados = $request->except('_token');

      Servico::create($dados);

      return redirect()->route('servicos.index')
                       ->with('mensagem','Serviço criado com sucesso!');
    }



     /**
    * Mostrar o formulário preenchido para alteração
    *
    * @param integer $id
    * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
    */

    public function edit(Servico $servico)
    {

      return view('servicos.edit')->with('servico', $servico);
    }




     /**
    * Atualiza um registro no banco de dados
    *
    * @param ServicoRequest $request
    * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
    */

    public function update(Servico $servico, ServicoRequest $request)
    {
      $dados = $request->except(['_token', '_method']);

      $servico->update($dados);

      return redirect()->route('servicos.index')
                        ->with('mensagem','Serviço atualizado com sucesso!');
    }
}
