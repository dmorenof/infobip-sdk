<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * whatsappDlrReportsResponse
 */
final class DeliveryResult extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'results',
];

    /**
     * Collection of reports, one per every message.
     */
    public \InfobipSDK\Collections\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\DeliveryResult\ResultsCollection $results;

}
