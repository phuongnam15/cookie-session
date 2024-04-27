<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\LocaleService\LocaleService;
use Illuminate\Http\Request;
use App\Http\Requests\GetLanguageRequest;

class LocaleController extends Controller
{
    protected $service;
    public function __construct(LocaleService $localeService){
        $this->service = $localeService;
    }
    public function setLanguage(Request $request) {
        $input = ['language' => 'en'];
        return $this->service->setLanguage($input);
    }
    public function getLanguage(GetLanguageRequest $request) {
        return $this->service->getLanguage();
    }
}
