<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Flyer extends Model
{

   protected $fillable = [
      'street',
       'city',
       'state',
       'country',
       'zip',
       'price',
       'des'
   ];

    public function scopeLocatedAt($query,$zip,$street)
    {
       // $street = str_replace('-','',$street);
        return $query->where(compact('zip','street'));
    }




   public function photos()
   {
	   return $this->hasMany(Flyers_photo::class);
   }
}

