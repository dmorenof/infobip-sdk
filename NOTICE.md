# Third-party API and trademark notices

This is an **independent, unofficial** client library. It is not affiliated with, endorsed by, or supported by Infobip.

- Infobip and its service names belong to their owners; the MIT license grants no rights to them and does not sublicense the Infobip API or its terms. Infobip publishes official PHP libraries; this one is generated from the contract.
- The contract in `contract/infobip.json` is the platform OpenAPI document Infobip publishes at <https://api.infobip.com/platform/1/openapi> (OpenAPI 3.1, JSON). Infobip's own definitions have several defects that the generator repaired so that the SDK could be built (a discriminator whose mapping points at models that do not extend it, `type: null` beside an `allOf`, an `*/*` answer, a model schema on a binary answer, a multipart body that is a single binary string, two paths that are the same URL with other placeholder names); the generation report lists them.
- Using the API requires an Infobip account and API key and compliance with its terms.
- Provided without warranty.
