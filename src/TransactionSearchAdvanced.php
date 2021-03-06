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
 * TransactionSearchAdvanced
 */
class TransactionSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TransactionSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TransactionSearchRow
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
		"criteria" => "TransactionSearch",
		"columns" => "TransactionSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
