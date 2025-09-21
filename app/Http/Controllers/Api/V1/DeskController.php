<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Desk;
use App\Http\Controllers\Controller;
use App\Http\Resources\DeskResource;
use App\Http\Requests\DeskStoreRequest;
use Symfony\Component\HttpFoundation\Response;

class DeskController extends Controller
{
    //php artisan make:controller Api/DeskController --api  creating resource controller
    //php artisan make:resource DeskResource                creating resource for controller
    // php artisan make:request DeskStoreRequest            creating request for controller

    public function index()
    {
        return DeskResource::collection(Desk::all());
    }

    public function store(DeskStoreRequest $request)
    {
        $createdDesc = Desk::create($request->validated());
        return new DeskResource($createdDesc);
    }

    public function show(Desk $desk)
    {
        return new DeskResource($desk);
    }

    public function update(DeskStoreRequest $request, Desk $desk)
    {
       $desk->update($request->validated());
       return new DeskResource($desk);
    }

    public function destroy(Desk $desk)
    {
       $desk->delete();
       return response(null, Response::HTTP_NO_CONTENT);
    }
}
