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
 * EmployeeRolesList
 */
class EmployeeRolesList {
	/**
	 * @access public
	 * @var EmployeeRoles[]
	 */
	public $roles;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"roles" => "EmployeeRoles[]",
		"replaceAll" => "boolean",
	);
}
