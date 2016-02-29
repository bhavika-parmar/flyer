<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Flyers_photo extends Model
{
	protected $table = 'flyers_photos';
	protected $fillable = ['path'];
	//protected $baseDir = '';

    public function flyer()
	{
		return $this->belongsTo(Flyer::class);
	}

	/*public static function fromForm(UploadedFile $file)
	{
      $photo = new static;

		$name=time().$file->getClientOriginalName();
	}*/
    public function delete()
	{
		\File::delete([

			$this->path

		]);
		parent::delete();
	}


}
