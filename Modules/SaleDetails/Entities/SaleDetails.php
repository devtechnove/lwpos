<?php

namespace Modules\SaleDetails\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SaleDetails extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\SaleDetails\Database\factories\SaleDetailsFactory::new();
    }
}
