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
 * StringCustomFieldRef
 */
class StringCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var string
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "string",
	);
}
