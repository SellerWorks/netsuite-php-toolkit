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
 * MerchandiseHierarchyNodeSearch
 */
class MerchandiseHierarchyNodeSearch extends SearchRecord {
	/**
	 * @access public
	 * @var MerchandiseHierarchyNodeSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var MerchandiseHierarchyNodeSearchBasic
	 */
	public $parentNodeJoin;

	static $paramtypesmap = array(
		"basic" => "MerchandiseHierarchyNodeSearchBasic",
		"parentNodeJoin" => "MerchandiseHierarchyNodeSearchBasic",
	);
}
