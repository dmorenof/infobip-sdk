<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource3\Persons;

final class Merge extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /people/3/persons/merge [operationId: merge-persons] */
    /**
     * Batch merge profiles
     *
     * Use this method to merge multiple person profiles belonging to the same user based on matching identifiers such as external ID, email, phone, and other contact information. The standard merge logic applies: the system selects a primary profile and consolidates fields and events from the secondary profiles into it. More information about the merge logic is available in the [People documentation](https://www.infobip.com/docs/people/synchronize-your-audience#merge-duplicate). <br>Any data included in the merge request overrides what is already stored. If the request provides a new external ID or new contact information, it is written into the resulting profile, either replacing the existing identifier or being added to the contact list, depending on the type. <br>If the merge request includes only new identifiers or contact information that match no existing profile, the system creates a new profile and populates it entirely with the data from the request. <br>**Notes:** <br>1. The batch size limit is 1000 persons. <br>2. Contact information in the request is checked only for formal validity (emails and phone numbers). Ensure its correctness, alignment with configured senders, and absence of errors.
     */
    public static function post(\InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MergeRequestDocsSchema $payload): \InfobipSDK\Responses\People\Resource3\Persons\Merge\Post
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Persons\Merge::class)->post($payload);
    }

}
