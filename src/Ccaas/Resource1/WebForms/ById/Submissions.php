<?php

declare(strict_types=1);

namespace InfobipSDK\Ccaas\Resource1\WebForms\ById;

final class Submissions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ccaas/1/web-forms/{id}/submissions [operationId: submit-webform] */
    /**
     * Submit web form data
     *
     * Use this method to submit a new set of data of the given web form. This will create a new conversation with the channel specified in the web form.
     */
    public static function post(string $id, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\WebFormSubmissionApiRequest $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\WebFormPostResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ccaas\Resource1\WebForms\ById\Submissions::class)->post($id, $payload);
    }

}
