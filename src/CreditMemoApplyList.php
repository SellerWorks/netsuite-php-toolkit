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
 * CreditMemoApplyList
 */
class CreditMemoApplyList {
	/**
	 * @access public
	 * @var CreditMemoApply[]
	 */
	public $apply;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"apply" => "CreditMemoApply[]",
		"replaceAll" => "boolean",
	);
}
