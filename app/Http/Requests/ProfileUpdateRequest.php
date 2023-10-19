<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            
            'name' => ['string', 'max:255'],
            'username' => ['string', 'max:20', 'min:5', Rule::unique(User::class)->ignore($this->user()->id)],
            'about' => ['string', 'max:20', 'min:5'],
            'subtitle' => ['string', 'max:20', 'min:5'],
            'title' => ['string', 'max:20', 'min:5'],
            'image' => ['image', 'mimes:jpg', 'max:2048'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
