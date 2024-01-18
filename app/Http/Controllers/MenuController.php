<?php

namespace App\Http\Controllers;

use App\Models\consultantInfo;
use App\Models\isNumberUsed;
use App\Models\transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultant_info = consultantInfo::take(3)->get();
        // foreach ($consultant_info as $c) {
        //     $a[] = $c->user;
        // }
        // return $a;
        // return $consultant_info;
        return view('menu', compact('consultant_info'));
    }

    public function indexCurhat()
    {
        return view('curhat');
    }

    public function indexForum()
    {
        return view('forum');
    }

    public function indexHubungiKami()
    {
        return view('hubungikami');
    }


    public function indexJT()
    {
        // pending 
        $date = today()->format('d-m-Y');
        
        $compact = ['date'];
        return view('janjitemu', compact($compact));
    }

    public function indexCO()
    {
        return view('curhatonline');
    }

    public function indexPsikolog()
    {
        $consultant = consultantInfo::all();
        $tipe = "kosong";
        $compact = ['consultant','tipe'];
        return view('psikolog', compact($compact));
    }

    public function indexProfilePsikolog(Request $request)
    {
        $id = $request->id;
        $consultant = consultantInfo::find($id);
        // return $consultant;
        $compact = ['consultant'];
        return view('profilepsikolog', compact($compact));
    }

    public function indexChat()
    {
        return view('chatify');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
