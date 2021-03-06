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
 * AccountingTransactionSearchAdvanced
 */
class AccountingTransactionSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var AccountingTransactionSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var AccountingTransactionSearchRow
	 */
	public $columns;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchId;
	/**
	 * @access public
	 * @var string
	 */
	public $savedSearchScriptId;

	static $paramtypesmap = array(
		"criteria" => "AccountingTransactionSearch",
		"columns" => "AccountingTransactionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
