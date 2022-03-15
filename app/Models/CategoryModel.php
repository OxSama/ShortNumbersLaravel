<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categ';
    use HasFactory;
    public $timestamps = false;

    public function numbers(){
        return $this->hasMany(NumbModel::class,'categ','categ');
    }
}
