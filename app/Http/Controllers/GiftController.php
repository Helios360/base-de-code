<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;
use App\Http\Requests\GiftRequest;
use Illuminate\Support\Facades\Mail;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gifts = Gift::orderBy('created_at', 'desc')->get();
        return view('home', compact('gifts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gifts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GiftRequest $request)
    {
        $data = $request->validated();
        Gift::create($data);
        Mail::raw("Le cadeau {$data['name']} a bien été ajouté ({$data['price']})", function($message){
            $message->to("no-reply@localhost.test")->subject('Test envoi de mail');
        });
        return redirect()->route('home')->with('success', 'Cadeau ajouté !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gift $gift)
    {
        return view('gifts.show', compact('gift'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gift $gift)
    {
        return view('gifts.edit', compact('gift'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GiftRequest $request, Gift $gift)
    {
        $gift->update($request->validated());
        return redirect()->route('gifts.show', $gift)->with('success', 'Cadeau ajouté !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gift $gift)
    {
        $gift->delete();
        return redirect()->route('home')->with('success', 'Cadeau supprimé !');
    }
}
