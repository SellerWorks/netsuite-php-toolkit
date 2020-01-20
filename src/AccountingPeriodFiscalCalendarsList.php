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
 * AccountingPeriodFiscalCalendarsList
 */
class AccountingPeriodFiscalCalendarsList {
	/**
	 * @access public
	 * @var AccountingPeriodFiscalCalendars[]
	 */
	public $accountingPeriodFiscalCalendars;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"accountingPeriodFiscalCalendars" => "AccountingPeriodFiscalCalendars[]",
		"replaceAll" => "boolean",
	);
}
