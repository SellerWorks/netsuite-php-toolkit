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
 * ClassificationSearchAdvanced
 */
class ClassificationSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ClassificationSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ClassificationSearchRow
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
		"criteria" => "ClassificationSearch",
		"columns" => "ClassificationSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
