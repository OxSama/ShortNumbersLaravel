<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestsModel extends Model
{
    protected $table = 'requests';
    public $timestamps = false;
    protected $fillable = [
        'cotype',
        'coname',
        'id',
        'coaddress',
        'coemail',
        'cophone',
        'delname',
        'delemail',
        'delphone'
    ];
    use HasFactory;
}
