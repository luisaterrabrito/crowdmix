<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveMusicChoice extends Request
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
            'videos.*.name' => 'required',
            'videos.*.video_url' => 'required',
            'videos.*.video_code' => 'required',
            'name' => 'required'
        ];
    }
}
