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
 * CustomerMessageSearchRow
 */
class CustomerMessageSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var CustomerMessageSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "CustomerMessageSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}
