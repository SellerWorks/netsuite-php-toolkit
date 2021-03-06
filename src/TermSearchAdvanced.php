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
 * TermSearchAdvanced
 */
class TermSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var TermSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var TermSearchRow
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
		"criteria" => "TermSearch",
		"columns" => "TermSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
