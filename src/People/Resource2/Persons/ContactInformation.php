<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\Persons;

final class ContactInformation extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /people/2/persons/contactInformation [operationId: delete-person-contact-information] */
    /**
     * Delete contact information from person
     *
     * Use this method to delete specified emails and mobile phones from a particular person.
     */
    public static function delete(?\InfobipSDK\DeleteParams\People\Resource2\Persons\ContactInformation $params = null): \InfobipSDK\Responses\People\Resource2\Persons\ContactInformation\Delete\PersonsContactInformationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ContactInformation::class)->delete($params);
    }

    /** PATCH /people/2/persons/contactInformation [operationId: add-person-contact-information] */
    /**
     * Add contact information to person
     *
     * Use this method to add emails and mobile phones to a particular person.
     */
    public static function patch(?\InfobipSDK\PatchParams\People\Resource2\Persons\ContactInformation $params = null): \InfobipSDK\Responses\People\Resource2\Persons\ContactInformation\Patch\PersonsContactInformationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ContactInformation::class)->patch($params);
    }

    /** PUT /people/2/persons/contactInformation [operationId: set-person-contact-information] */
    /**
     * Set contact information to person
     *
     * Use this method to replace contact information for a particular person. This methods will replace all existing emails and mobile phones with new contact information.
     */
    public static function put(?\InfobipSDK\PutParams\People\Resource2\Persons\ContactInformation $params = null): \InfobipSDK\Responses\People\Resource2\Persons\ContactInformation\Put\PersonsContactInformationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\ContactInformation::class)->put($params);
    }

}
