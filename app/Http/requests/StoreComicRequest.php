<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'title' => ['required', 'string', 'unique:comics'],
            'series' => ['required', 'string', 'unique:comics'],
            'thumb' => 'required|url:http,https',
            'type' => 'required|string',
            'price' => 'required|string',
            'sale_date' => 'required|string',
            'description' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ];     
    }

    public function messages(): array
    {

        return [
            'title.required' => 'il campo titolo è obbligatorio',
            'title.unique' => "esiste già un fumetto con il titolo {$this->title}",
            'series.required' => 'il campo serie è obbligatorio',
            'series.unique' => "esiste già la serie {$this->series}",
            'thumb.required' => 'il campo immagine è obbligatorio',
            'type.required' => 'il campo tipologia di fumetto è obbligatorio',
            'price.required' => 'il campo prezzo è obbligatorio',
            'sale_date.required' => 'il campo data di pubblicazione è obbligatorio',
            'description.required' => 'il campo descrizione è obbligatorio',
            'artists.required' => 'il campo artisti è obbligatorio',
            'writers.required' => 'il campo scrittori è obbligatorio',
        ];
    }
}