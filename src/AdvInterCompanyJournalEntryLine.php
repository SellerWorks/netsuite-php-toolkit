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
 * AdvInterCompanyJournalEntryLine
 */
class AdvInterCompanyJournalEntryLine {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $lineSubsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var float
	 */
	public $debit;
	/**
	 * @access public
	 * @var float
	 */
	public $credit;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var float
	 */
	public $taxRate1;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $dueToFromSubsidiary;
	/**
	 * @access public
	 * @var float
	 */
	public $grossAmt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $schedule;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $revenueRecognitionRule;
	/**
	 * @access public
	 * @var boolean
	 */
	public $eliminate;
	/**
	 * @access public
	 * @var string
	 */
	public $residual;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $amortizationSched;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $scheduleNum;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $amortizStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $amortizationEndDate;
	/**
	 * @access public
	 * @var string
	 */
	public $amortizationResidual;
	/**
	 * @access public
	 * @var float
	 */
	public $tax1Amt;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $tax1Acct;
	/**
	 * @access public
	 * @var float
	 */
	public $lineFxRate;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"lineSubsidiary" => "RecordRef",
		"account" => "RecordRef",
		"line" => "integer",
		"debit" => "float",
		"credit" => "float",
		"taxCode" => "RecordRef",
		"memo" => "string",
		"taxRate1" => "float",
		"entity" => "RecordRef",
		"dueToFromSubsidiary" => "RecordRef",
		"grossAmt" => "float",
		"schedule" => "RecordRef",
		"department" => "RecordRef",
		"startDate" => "dateTime",
		"class" => "RecordRef",
		"endDate" => "dateTime",
		"location" => "RecordRef",
		"revenueRecognitionRule" => "RecordRef",
		"eliminate" => "boolean",
		"residual" => "string",
		"amortizationSched" => "RecordRef",
		"scheduleNum" => "RecordRef",
		"amortizStartDate" => "dateTime",
		"amortizationEndDate" => "dateTime",
		"amortizationResidual" => "string",
		"tax1Amt" => "float",
		"tax1Acct" => "RecordRef",
		"lineFxRate" => "float",
		"customFieldList" => "CustomFieldList",
	);
}
