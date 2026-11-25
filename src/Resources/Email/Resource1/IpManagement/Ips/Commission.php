<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1\IpManagement\Ips;

final class Commission extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/email/1/ip-management/ips/commission',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\\IpResponse',
    ];

    /**
     * Commission IP
     *
     * Commission a new Dedicated IP.
     * Disaster Recovery is enabled by default for email traffic in the US and EU regions.Each dedicated IP is paired with a corresponding IP from a different data center within the same region. This pairing ensures that if one data center becomes unavailable, the paired IP can seamlessly take over full sending responsibilities, maintaining uninterrupted traffic flow.
     * Standard pricing for dedicated IPs applies. Charges are incurred at the time of commissioning and recur monthly on the 1st of each month. For Disaster Recovery regions, each IP in the pair is billed separately at the standard rate.
     * To confirm the pricing applicable to your account, please contact your Account Manager.
     *
     */
    public function post(): \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpResponse
    {
        /** @var \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpResponse $result */
        $result = $this->executeOperation(self::operation(self::POST));
        return $result;
    }

}
