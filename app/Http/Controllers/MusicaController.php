<?php

namespace App\Http\Controllers;
use App\Musica;
use Illuminate\Http\Request;
use DB;

class MusicaController extends Controller
{
    public function index()
    {
        $data = Musica::latest()->paginate(5);
        
        return view('musica.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
 

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('musica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'artista'    =>  'required',
            'titulo'     =>  'required',
            'genero'     =>  'required',
            'preco'     =>  'required',
            'ano'     =>  'required',
            'audio'        =>  'required | mimes:mp3,wav,aac,oga | max:20000',
            'foto'         =>  'required | mimes:jpeg,jpg,png | max:5000' 
          
        ]);

        $image = $request->file('audio');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('audios'), $new_name);


        $image2 = $request->file('foto');

        $new_name2 = rand() . '.' . $image2->getClientOriginalExtension();
        $image2->move(public_path('images'), $new_name2);

        $form_data = array(
            'artista'       =>   $request->artista,
            'titulo'        =>   $request->titulo,
            'genero'        =>   $request->genero,
            'preco'        =>   $request->preco,
            'ano'        =>   $request->ano,
            'audio'            =>   $new_name,
            'foto'            =>   $new_name2

        );



        Musica::create($form_data);

        return redirect('musica')->with('success', 'Cadastrado com Sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Musica::findOrFail($id);
        return view('musica.view', compact('data'));
       

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Musica::findOrFail($id);
        return view('musica.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('audio');
        if($image != '')
        {
            $request->validate([
                'artista'    =>  'required',
                'titulo'     =>  'required',
                'genero'     =>  'required',
                'preco'     =>  'required',
                'ano'     =>  'required',
                'audio'        =>  'required | mimes:mp3,wav,aac,oga | max:20000',
                'foto'         =>  'required | mimes:jpeg,jpg,png | max:5000'  
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('audios'), $image_name);

            $image_name2 = rand() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('images'), $image_name2);
        }
        else
        {
            $request->validate([
                
            'artista'    =>  'required',
            'titulo'     =>  'required',
            'genero'     =>  'required',
            'preco'     =>  'required',
            'ano'     =>  'required',
             
            ]);
        }

        $form_data = array(
            'artista'       =>   $request->artista,
            'titulo'        =>   $request->titulo,
            'genero'        =>   $request->genero,
            'preco'        =>   $request->preco,
            'ano'        =>   $request->ano,
            'audio'            =>   $image_name,
            'foto'            =>   $image_name2
           
        );

        Musica::whereId($id)->update($form_data);
        return redirect('musica')->with('success', 'Editado com com Sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Musica::findOrFail($id);
        
        $data->delete();
        return redirect('musica')->with('success', 'Apagado com Sucesso');
    }

    
    
    
    public function Pagamento($numero,$amount){

        $mpesa = new \Karson\MpesaPhpSdk\Mpesa();
        $mpesa->setApiKey('your api key');
        $mpesa->setPublicKey('your public key');
        $mpesa->setEnv('test');// 'live' production environment 

        //This creates transaction between an M-Pesa short code to a phone number registered on M-Pesa.

        $result = $mpesa->c2b($invoice_id, $phone_number, $amount, $reference_id, $shortcode);



    }

    
    
    
    
    public function Pesquisar(){
      $texto = Input::get('texto');
      $status = Input::get('status');
      $pesquisa = Musica::where('artista', 'like', '%'.$status.'%')
     ->orWhere('erp_cost','like','%'.$texto.'%')
     ->orWhereHas('titulo', function ($query) use ($texto) {
         $query->where('erp_name', 'like', '%'.$texto.'%');
     })
     ->orderBy('artista')
     ->paginate(20);
    }

}
