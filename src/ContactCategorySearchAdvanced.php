<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * ContactCategorySearchAdvanced
 */
class ContactCategorySearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ContactCategorySearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ContactCategorySearchRow
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
		"criteria" => "ContactCategorySearch",
		"columns" => "ContactCategorySearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
