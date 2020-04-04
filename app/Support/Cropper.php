<?php 	

/**
 * 
 */
namespace App\Support;

class Cropper
{
	
	public static function thumb(string $imagePathUri, int $width, int $height = null)
	{
		$cropper = new \CoffeeCode\Cropper\Cropper("../public/storage/cache");
		$pathThumb = $cropper->make(config('filesystems.disks.public.root') . "/" . $imagePathUri, $width, $height);
		// se for php puro é só utilizar o array pop para pegar a ultima posicao, porém 
		// aqui utilizarei um recurso do laravel que é o collect
		return $file = 'cache/' . collect(explode('/', $pathThumb))->last();

	}
}