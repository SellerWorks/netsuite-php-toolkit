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
 * TimeEntrySearchBasic
 */
class TimeEntrySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $billable;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingClass;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $billingStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $date;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $duration;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employee;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $exempt;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isCharged;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paidByPayroll;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paidExternally;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $payItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $productive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $utilized;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"approvalStatus" => "SearchMultiSelectField",
		"billable" => "SearchBooleanField",
		"billingClass" => "SearchMultiSelectField",
		"billingStatus" => "SearchBooleanField",
		"class" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"date" => "SearchDateField",
		"dateCreated" => "SearchDateField",
		"department" => "SearchMultiSelectField",
		"duration" => "SearchDoubleField",
		"employee" => "SearchMultiSelectField",
		"exempt" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isCharged" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"lastModified" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"nextApprover" => "SearchMultiSelectField",
		"paidByPayroll" => "SearchBooleanField",
		"paidExternally" => "SearchBooleanField",
		"payItem" => "SearchMultiSelectField",
		"productive" => "SearchBooleanField",
		"subsidiary" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"utilized" => "SearchBooleanField",
		"customFieldList" => "SearchCustomFieldList",
	);
}
