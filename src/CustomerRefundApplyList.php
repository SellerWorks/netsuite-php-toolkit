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
 * CustomerRefundApplyList
 */
class CustomerRefundApplyList {
	/**
	 * @access public
	 * @var CustomerRefundApply[]
	 */
	public $apply;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"apply" => "CustomerRefundApply[]",
		"replaceAll" => "boolean",
	);
}
