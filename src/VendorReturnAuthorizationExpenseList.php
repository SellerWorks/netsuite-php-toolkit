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
 * VendorReturnAuthorizationExpenseList
 */
class VendorReturnAuthorizationExpenseList {
	/**
	 * @access public
	 * @var VendorReturnAuthorizationExpense[]
	 */
	public $expense;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"expense" => "VendorReturnAuthorizationExpense[]",
		"replaceAll" => "boolean",
	);
}
