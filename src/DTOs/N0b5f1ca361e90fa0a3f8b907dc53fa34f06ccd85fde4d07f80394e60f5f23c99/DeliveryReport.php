<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * DeliveryReport
 */
final class DeliveryReport extends \InfobipSDK\DTOs\N31df1a57142f86aa8caefaa914e5a897a1c5c119e96ae8d3d5f19b12a525e2b7\Report
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'messageCount' => [
            'format' => 'int32',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'bulkId',
        'contact',
        'doneAt',
        'error',
        'messageCount',
        'messageId',
        'price',
        'sentAt',
        'status',
        'to',
    ];
}
