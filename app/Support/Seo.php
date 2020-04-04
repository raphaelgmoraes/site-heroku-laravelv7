<?php 


namespace App\Support;

use \CoffeeCode\Optimizer\Optimizer;

/**
 * Plugin desenvolvido por Robson V. Leite da Upinside
 * SEO Otimizador de Site para posicionamento e Hanckeamento
 * Data criação: 29/03/2020 18:17:22
 * Classe construída: Raphael G Moraes
 * 
 */

class Seo
{
	
	private $optimizer;

	function __construct()
	{
		$this->optimizer = new Optimizer;
		
		$this->optimizer->openGraph(

			env('APP_NAME'), 
			"pt_BR", 
			"article"
		
		)->twitterCard(
			env('CLIENT_SOCIAL_TWITTER_CREATOR'), 
			env('CLIENT_SOCIAL_TWITTER_PUBLISHER'), 
			env('APP_URL')
		
		)->facebook(
			env('CLIENT_SOCIAL_FACEBOOK_APP')
		);
	}
	public function render(string $title, string $description, string $url, string $image, bool $follow = true)
	{
		return $this->optimizer->optimize(
			$title, 
			$description, 
			$url, 
			$image, 
			$follow 
		)->render();

	}
}