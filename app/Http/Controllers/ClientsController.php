<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\Http\Requests\ClientsFormRequest;
use Carbon\Carbon;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Listando informaçoes do cliente
        $clients = Clients::all();
        return view('clients', ['clients' => $clients]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Listando informaçoes do cliente
        $clients = Clients::find($id);
        return response()->json($clients);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        // Trazendo informações para edição
        $where = array('id' => $id);
        $customer = Customer::where($where)->first();
        return Response::json($customer);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientsFormRequest $request)
    {
        try {
            // Salvando ou atualizando cliente
            $client = Clients::updateOrCreate(['id' => $request->input('client_id')], [
                        'name' => $request->input('name'),
                        'birth_date' => Carbon::createFromFormat('d/m/Y', $request->input('birth_date'))->format('Y-m-d'),
                        'sex' => $request->input('sex'),
                        'zip_code' => $request->input('zip_code'),
                        'address' => $request->input('address'),
                        'address_number' => $request->input('address_number'),
                        'address_complement' => $request->input('address_complement'),
                        'district' => $request->input('district'),
                        'state' => $request->input('state'),
                        'city' => $request->input('city')
                    ]);
            
            return redirect()->route('clients')->with([
                'success' => true, 
                'message' => 'Cliente salvo com sucesso!'
            ]);
        } catch (\Exception $ex) {
            return redirect()->route('clients')->with([
                'error' => true, 
                'message' => 'Erro ao salvar cliente, por gentileza entre em contato com o suporte!'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            //Setando cliente como deletado no banco, porém não apagando
            $client = Clients::find($request->input('clientdel_id'));
            $client->delete();
            
            return redirect()->route('clients')->with([
                'success' => true, 
                'message' => 'Cliente removido com sucesso!'
            ]);
        } catch (\Exception $ex) {
            return redirect()->route('clients')->with([
                'error' => true, 
                'message' => 'Erro ao deletar cliente, por gentileza entre em contato com o suporte!'
            ]);
        }
    }
}
