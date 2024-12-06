<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nit', 'type'];


    public function getChildren()
    {
        return $this->hasMany(Sucursal::class, 'parent_id', 'id');
    }
}
