<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'img' => 'file|image|mimes:jpeg,png,jpg,svg|dimensions:max_width=250,max_height=150|max:960',
            'description' => 'required|max:255',
            'price' => 'required|max:8',
            'sale' => 'max:8'
        ];
    }
}
