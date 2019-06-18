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
 * InvoiceExpCostList.
 */
class InvoiceExpCostList
{
    /**
     * @var InvoiceExpCost[]
     */
    public $expCost;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = [
        'expCost' => 'InvoiceExpCost[]',
        'replaceAll' => 'boolean',
    ];
}
