<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class HowItWorks implements \App\Acf\Blocks\Helpers\BlockItem {

	public static function setBlockParams(): void {
		RegisterBlock::addBlock( new Block( 'howItWorks',
				'HowItWorks',
				'HowItWorks block',
				'templates/parts/howItWorks.php',
				'',
				'',
				array(
					'align' => false,
					'mode'  => true,
					'jsx'   => true
				),
				array(
					'title'       => "HowItWorks block",
					'description' => "HowItWorks block"
				),
				'image',
				'custom'
			)
		);
	}
}