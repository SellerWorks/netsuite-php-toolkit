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
 * CustomRecordTypeOnlineFormsList
 */
class CustomRecordTypeOnlineFormsList {
	/**
	 * @access public
	 * @var CustomRecordTypeOnlineForms[]
	 */
	public $onlineForms;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"onlineForms" => "CustomRecordTypeOnlineForms[]",
		"replaceAll" => "boolean",
	);
}
