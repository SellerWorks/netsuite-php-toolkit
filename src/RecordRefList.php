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
 * RecordRefList
 */
class RecordRefList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $recordRef;

	static $paramtypesmap = array(
		"recordRef" => "RecordRef[]",
	);
}
