<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * PromotionCodeItems
 */
class PromotionCodeItems {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;

	static $paramtypesmap = array(
		"item" => "RecordRef",
	);
}
