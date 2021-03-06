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
 * SearchColumnLongField
 */
class SearchColumnLongField extends SearchColumnField {
	/**
	 * @access public
	 * @var integer
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "integer",
	);
}
