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
 * CalendarEventSearch
 */
class CalendarEventSearch extends SearchRecord {
	/**
	 * @access public
	 * @var CalendarEventSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var EntitySearchBasic
	 */
	public $attendeeJoin;
	/**
	 * @access public
	 * @var ContactSearchBasic
	 */
	public $attendeeContactJoin;
	/**
	 * @access public
	 * @var CustomerSearchBasic
	 */
	public $attendeeCustomerJoin;
	/**
	 * @access public
	 * @var SupportCaseSearchBasic
	 */
	public $caseJoin;
	/**
	 * @access public
	 * @var FileSearchBasic
	 */
	public $fileJoin;
	/**
	 * @access public
	 * @var OpportunitySearchBasic
	 */
	public $opportunityJoin;
	/**
	 * @access public
	 * @var OriginatingLeadSearchBasic
	 */
	public $originatingLeadJoin;
	/**
	 * @access public
	 * @var TimeBillSearchBasic
	 */
	public $timeJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $transactionJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var NoteSearchBasic
	 */
	public $userNotesJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "CalendarEventSearchBasic",
		"attendeeJoin" => "EntitySearchBasic",
		"attendeeContactJoin" => "ContactSearchBasic",
		"attendeeCustomerJoin" => "CustomerSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"opportunityJoin" => "OpportunitySearchBasic",
		"originatingLeadJoin" => "OriginatingLeadSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
