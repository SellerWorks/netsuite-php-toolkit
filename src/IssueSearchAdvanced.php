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
 * IssueSearchAdvanced
 */
class IssueSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var IssueSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var IssueSearchRow
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
		"criteria" => "IssueSearch",
		"columns" => "IssueSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
