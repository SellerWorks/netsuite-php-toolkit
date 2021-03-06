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
 * EmployeeSearchAdvanced
 */
class EmployeeSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var EmployeeSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var EmployeeSearchRow
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
		"criteria" => "EmployeeSearch",
		"columns" => "EmployeeSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
