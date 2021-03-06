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
 * OriginatingLeadSearchRow
 */
class OriginatingLeadSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var OriginatingLeadSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "OriginatingLeadSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
