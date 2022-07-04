<?php

namespace App\Models;
use app\Models\Projet;
use app\Models\appeloffre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table="clients";
    protected $fillable = ['nom' , 'abreviation' , 'ville'];
    protected $guarded =[];
    public function projets(){
        return $this->belongsTo(Projet::class);
    }
    public function appeloffres(){
        return $this->belongsTo(appeloffre::class);
    }

    public function tasks(){
        return $this->hasMany(task::class);
    }
}
