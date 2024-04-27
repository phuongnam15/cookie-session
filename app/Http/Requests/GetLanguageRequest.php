<?php

namespace App\Http\Requests;

use App\Http\Requests\_Abstract\ApiBaseRequest;

class GetLanguageRequest extends ApiBaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'language' => 'required|string',
        ];
    }
}
