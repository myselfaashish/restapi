<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'discount' => $this->discount,
            'totalPrice' => $this->discount > 0 ? round($this->price - (($this->discount / 100) * $this->price), 2) : $this->price,
            'ratings' => $this->reviews->count() > 0 ? round($this->reviews->sum('star') / $this->reviews->count(), 2) : 'No reviews yet',
            'href' => [
                'details' => route('products.show', $this->id)
            ]
        ];
    }
}
