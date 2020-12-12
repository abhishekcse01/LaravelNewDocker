<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUploaders extends Model
{
   protected $table = 'file_uploaders';

   protected $fillable = ['id', 'provider_uploads_id','file_type','file','created_at','updated_at'];
}
