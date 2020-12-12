<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderUploads extends Model
{
   protected $table = 'provider_uploads';

   protected $fillable = ['id', 'provider','provider_type','rules','created_at','updated_at'];
}
