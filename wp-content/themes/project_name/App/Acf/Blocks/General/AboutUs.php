<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class AboutUs implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'aboutUs',
				'AboutUs',
				'AboutUs block',
				'templates/parts/aboutUs.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "AboutUs block",
					'description' => "AboutUs block"
				),
				'image',
				'custom'
			)
		);
	}
}