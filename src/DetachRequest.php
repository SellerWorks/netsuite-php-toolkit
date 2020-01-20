<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * DetachRequest
 */
class DetachRequest {
	/**
	 * @access public
	 * @var DetachReference
	 */
	public $detachReference;

	static $paramtypesmap = array(
		"detachReference" => "DetachReference",
	);
}
