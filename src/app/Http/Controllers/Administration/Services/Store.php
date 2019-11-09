<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Http\Requests\Administration\ValidateServiceStore;
use LaravelEnso\Services\app\Service;

class Store extends Controller
{
    public function __invoke(ValidateServiceStore $request, Service $service)
    {
        tap($service)->fill($request->validated())
            ->save();

        return [
            'message' => __('The service was successfully created'),
            'redirect' => 'administration.services.edit',
            'param' => ['service' => $service->id],
        ];
    }
}
