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
 * PriceLevelSearch
 */
class PriceLevelSearch extends SearchRecord {
	/**
	 * @access public
	 * @var PriceLevelSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;

	static $paramtypesmap = array(
		"basic" => "PriceLevelSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}
