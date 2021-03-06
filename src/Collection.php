<?php
namespace Harmony\Voodoo;

use Harmony\Mana\Map;

/**
 * Class wrapper for collection
 * 
 * @package Voodoo
 * @author  Simon Holloway <holloway.sy@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 */
class Collection extends Map
{

	/**
	 * Pluck a keys value from multiple sources
	 * 
	 * @param  string $index
	 * @return mixed
	 */
	public function pluck($index)
	{
		$plucked = array();
		foreach ($this->data as $child) {
			if ($value = $child->get($index, false)) {
				$plucked[] = $value;
			}
		}
		return $plucked;
	}

}
