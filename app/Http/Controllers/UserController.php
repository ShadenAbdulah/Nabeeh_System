<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $attr =
//            request()->validate([
//                'age' => 'required|integer',
//                'gender' => 'required',
//            ]);
//
//        $attr['name'] = ($request->input('name')) ? $request->input('name') : null;

        $user = User::create(request()->validate([]));

        return redirect()->route('user.train', ['test' => Test::first(), 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $apiGatewayUrl = 'https://hboras4vfn2de5azruvc2kdwem0ovckc.lambda-url.us-east-1.on.aws/';
        $response = Http::timeout(20)->get($apiGatewayUrl);
        Log::info('Lambda serverFun response:', ['response' => $response->body()]);

        if ($response->successful()) {
            return view('layouts.train', ['test' => Test::first(), 'user' => $user]);
        } else {
            return view('server500');
        }
    }
}
