<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ChatCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function($data) {
                return [
                    'user_id' => $data->patient_id == 1 ? $data->patient_id : null,
                    'message' => $data->message,
                    'time' => $data->created_at->diffForHumans()
                ];
            })
        ];
    }
}
