<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7b23cc7ec456214e90b61e3d5abd3aaf7422ea4b20f1cdd2d4e9c44fbceaf035;

/**
 * SMSAdvancedBinaryRequest
 */
final class SMSAdvancedBinaryRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'messages',
];

    protected const array VALIDATION = [
    'messages' => [
        'minItems' => 1,
    ],
];

    /**
     * Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request. If not provided, it will be auto-generated and returned in the API response. Typically, used to fetch [delivery reports](#channels/sms/get-outbound-sms-message-delivery-reports) and [message logs](#channels/sms/get-outbound-sms-message-logs). Anything above 100 characters passed in the request will be clipped during processing and returned in response, reports and logs.
     */
    public string $bulkId;
    /**
     * An array of message objects of a single message or multiple messages sent under one bulk ID.
     */
    public \InfobipSDK\Collections\N7b23cc7ec456214e90b61e3d5abd3aaf7422ea4b20f1cdd2d4e9c44fbceaf035\SMSAdvancedBinaryRequest\MessagesCollection $messages {
        set {
            $this->assigning('messages', $value);
            $this->messages = $value;
        }
    }
    public \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\SendingSpeedLimit $sendingSpeedLimit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\N7b23cc7ec456214e90b61e3d5abd3aaf7422ea4b20f1cdd2d4e9c44fbceaf035\SMSAdvancedBinaryRequest\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SMSBinaryMessage::class)) : parent::assignMember($name, $value),
            'sendingSpeedLimit' => $value instanceof \stdClass ? $this->sendingSpeedLimit = new \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\SendingSpeedLimit($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
