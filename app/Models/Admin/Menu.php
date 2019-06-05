<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre','url','icono']; //campos que se pueden crear masivamente, para evitar intrusiones externas
    protected $guarded = ['id']; //laravel no lo deja modificar, para evitar intrusiones externas
}
