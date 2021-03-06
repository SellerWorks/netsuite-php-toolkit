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
 * SearchColumnStringCustomField
 */
class SearchColumnStringCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "string",
	);
}
