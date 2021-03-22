<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;


    public $incrementing = false;
    protected $fillable =[
     
        'id',
        'description',
        'stock_category_id',
        'uom',
        'barcode',
        'discontinued',
        'photo_path'
    ];

    public function stock_category(){
        return $this->belongsTo(StockCategory::class);
    }
}
