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
 * CustomRecordSearchAdvanced
 */
class CustomRecordSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var CustomRecordSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var CustomRecordSearchRow
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
		"criteria" => "CustomRecordSearch",
		"columns" => "CustomRecordSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
