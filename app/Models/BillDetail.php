<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'price',
        'bill_id',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }

    public function getTotalPrice()
    {
        return $this->quantity * $this->price;
    }
}