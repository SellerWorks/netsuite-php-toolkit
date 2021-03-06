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
 * ContactRoleSearchAdvanced
 */
class ContactRoleSearchAdvanced extends SearchRecord {
	/**
	 * @access public
	 * @var ContactRoleSearch
	 */
	public $criteria;
	/**
	 * @access public
	 * @var ContactRoleSearchRow
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
		"criteria" => "ContactRoleSearch",
		"columns" => "ContactRoleSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}
