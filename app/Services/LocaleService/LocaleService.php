<?php

namespace App\Services\LocaleService;

use Exception;

class LocaleService
{
   public function setLanguage($input){
        try{
            $lang = $input['language'];
            
            session()->put('language', $lang);

            return response()->json(['language' => session('language')]);
        }catch(Exception $e){
            logger($e->getMessage());
            return response()->json(['error' => $e->getMessage()]);}
    }
    public function getLanguage(){
        return response()->json(['language' => session('language')]);
    }
}
