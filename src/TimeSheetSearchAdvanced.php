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
 * TimeSheetSearchAdvanced
 */
class TimeSheetSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TimeSheetSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TimeSheetSearchRow
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
		"criteria" => "TimeSheetSearch",
		"columns" => "TimeSheetSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
