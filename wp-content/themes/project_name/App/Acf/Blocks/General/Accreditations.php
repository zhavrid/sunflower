<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Accreditations implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'accreditations',
				'Accreditations',
				'Accreditations block',
				'templates/parts/accreditations.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "Accreditations block",
					'description' => "Accreditations block"
				),
				'image',
				'custom'
			)
		);
	}
}