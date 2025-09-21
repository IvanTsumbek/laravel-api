<?php

namespace App\Http\Controllers\Api;

use App\Models\Desk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DeskStoreRequest;
use App\Http\Resources\DeskResource;

class DeskController extends Controller
{
    //php artisan make:controller Api/DeskController --api  creating resource controller
    //php artisan make:resource DeskResource                creating resource for controller
    // php artisan make:request DeskStoreRequest            creating request for controller

    public function index()
    {
        return DeskResource::collection(Desk::with('lists')->get());
    }

    public function store(DeskStoreRequest $request)
    {
        $createdDesc = Desk::create($request->validated());
        return new DeskResource($createdDesc);
    }

    public function show($id)
    {
        return new DeskResource(Desk::with('lists')->findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
