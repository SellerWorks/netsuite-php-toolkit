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
 * AdvInterCompanyJournalEntryLineList
 */
class AdvInterCompanyJournalEntryLineList {
	/**
	 * @access public
	 * @var AdvInterCompanyJournalEntryLine[]
	 */
	public $line;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"line" => "AdvInterCompanyJournalEntryLine[]",
		"replaceAll" => "boolean",
	);
}
