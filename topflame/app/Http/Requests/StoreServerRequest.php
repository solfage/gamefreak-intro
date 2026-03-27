<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120', 'unique:servers,name'],
            'hostname' => ['required', 'string', 'max:255', 'unique:servers,hostname'],
            'login_port' => ['required', 'string', 'max:20'],
            'game_port' => ['required', 'string', 'max:20'],
            'chronicle' => ['required', 'string', 'max:120'],
            'rate_exp' => ['required', 'integer', 'min:1'],
            'rate_sp' => ['required', 'integer', 'min:1'],
            'rate_adena' => ['required', 'integer', 'min:1'],
            'website_url' => ['nullable', 'url'],
            'discord_url' => ['nullable', 'url'],
            'description' => ['nullable', 'string'],
        ];
    }
}
