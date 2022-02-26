<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Servicios extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'Nombre_Servicio' => $this->Nombre_Servicio,
            'Costo' => $this->Costo,
            'Tiempo_Estimado' => $this->Tiempo_Estimado,

        ];
    }
}
