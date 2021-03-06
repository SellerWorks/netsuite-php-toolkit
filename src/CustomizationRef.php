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
 * CustomizationRef
 */
class CustomizationRef extends RecordRef {
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"scriptId" => "string",
	);
}
