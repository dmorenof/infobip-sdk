<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * Exception Response
 *
 * Response error codes
 *
 * <table>
 * <tr><th>Error</th><th>ErrorCode</th><th>HTTP status</th></tr>
 * <tr><td>Bad request</td><td>40001</td><td>400</td></tr>
 * <tr><td>Duplicate person</td><td>40002</td><td>400</td></tr>
 * <tr><td>Person manipulation failed</td><td>40003</td><td>400</td></tr>
 * <tr><td>Person already in flow</td><td>40004</td><td>400</td></tr>
 * <tr><td>Flow inactive</td><td>40005</td><td>400</td></tr>
 * <tr><td>Person is not in the flow</td><td>40006</td><td>400</td></tr>
 * <tr><td>Flow not found</td><td>40401</td><td>404</td></tr>
 * <tr><td>Person not found</td><td>40402</td><td>404</td></tr>
 * <tr><td>Action not found</td><td>40403</td><td>404</td></tr>
 * <tr><td>Internal server error</td><td>50001</td><td>500</td></tr>
 * </table>
 * Example: {"errorCode":40001,"errorMessage":""}
 */
final class ExceptionResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'errorCode' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Format: int32
     */
    public int $errorCode {
        set {
            $this->assigning('errorCode', $value);
            $this->errorCode = $value;
        }
    }
    public string $errorMessage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errorCode' => is_int($value) ? $this->errorCode = $value : parent::assignMember($name, $value),
            'errorMessage' => is_string($value) ? $this->errorMessage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
