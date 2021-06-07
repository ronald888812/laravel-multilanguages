<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\MultiLanguage;
class Product extends Model
{
    use HasFactory;
    use MultiLanguage;
    protected $fillable = [
        'title_en', 'title_id','price_en','price_id','qty_id','qty_en','desc_id','desc_en'
    ];
    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'title','price','qty','desc'
    ];
}
