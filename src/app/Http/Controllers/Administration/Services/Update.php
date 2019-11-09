<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Http\Requests\Administration\ValidateServiceStore;
use LaravelEnso\Services\app\Service;

class Update extends Controller
{
    public function __invoke(ValidateServiceStore $request, Service $service)
    {
        $service->update($request->validated());

        return ['message' => __('The service was successfully updated')];
    }
}
