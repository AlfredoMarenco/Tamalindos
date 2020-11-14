<?php

namespace App\Http\Controllers;

use App\Mail\PetLost;
use App\Models\Mascota;
use App\Models\Raza;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Mascota::where('user_id', auth()->id());
        $mascotas = $mascotas->get();
        return view('mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $races = Raza::all();
        return view('mascotas.create', compact('races'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $newmascota = new Mascota;
        if ($request->hasFile('photo')) {
            $newmascota->photo = $request->file('photo')->store('public');
        }
        $newmascota->identificator = Str::random(20);
        $newmascota->name = $request->name;
        $newmascota->age = $request->age;
        $newmascota->allergy = $request->allergy;
        $newmascota->race_id = $request->race_id;
        $newmascota->weight = $request->weight;
        $newmascota->dewormed = $request->dewormed;
        $newmascota->ailments = $request->ailments;
        $newmascota->user_id = $request->user_id;

        $newmascota->save();

        return redirect('mascota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show($mascota)
    {
        $mascota = Mascota::where('identificator', $mascota)->first();
        return view('mascotas.profile', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($mascota)
    {
        $races = Raza::all();
        $mascota = Mascota::where('id',$mascota)->first();
        
        return view('mascotas.edit',compact('mascota','races'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$mascota)
    {   
        $mascota = Mascota::find($mascota);
        if ($request->hasFile('photo')) {
            $mascota->photo = $request->file('photo')->store('public');
        }
        $mascota->name = $request->name;
        $mascota->name = $request->name;
        $mascota->age = $request->age;
        $mascota->allergy = $request->allergy;
        $mascota->race_id = $request->race_id;
        $mascota->weight = $request->weight;
        $mascota->dewormed = $request->dewormed;
        $mascota->ailments = $request->ailments;
        $mascota->user_id = $request->user_id;
        $mascota->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        //
    }

    public function alertEmailLost($id)
    {
        //Mail::to($newCliente->email)->send(new Bienvenida($newCliente));
        $mascota = Mascota::where('id',$id)->first();
        $clientes = User::all();
        foreach ($clientes as $cliente) {
            
            Mail::to($cliente->email)->send(new PetLost($mascota));    
        }
    }
}
