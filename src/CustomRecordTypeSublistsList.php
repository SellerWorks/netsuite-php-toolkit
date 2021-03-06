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
 * CustomRecordTypeSublistsList
 */
class CustomRecordTypeSublistsList {
	/**
	 * @access public
	 * @var CustomRecordTypeSublists[]
	 */
	public $sublists;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"sublists" => "CustomRecordTypeSublists[]",
		"replaceAll" => "boolean",
	);
}
