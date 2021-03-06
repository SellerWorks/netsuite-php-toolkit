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
 * SalesTaxItemSearchRow
 */
class SalesTaxItemSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var SalesTaxItemSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var TaxTypeSearchRowBasic
	 */
	public $taxTypeJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "SalesTaxItemSearchRowBasic",
		"taxTypeJoin" => "TaxTypeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
