# hellox-cms
The configuration and custom modules for the Drupal CMS.

## Notes
The `hellox_feed_pager` and `hellox_podcast_feed` modules are entirely custom and are not derived from any other Drupal modules.

On the other hand, `backup_migrate` and `backup_migrate_s3` are Drupal community modules, but both have been combined with dependencies and hand-patched to get around several deficiencies (lack of Postgres support, new AWS S3 authentication protocols, etc.) whose remedies still have not been brought into the mainline branches of these modules. The `aws-sdk-php` library, necessary for usage of `backup_migrate_s3`, has been provided in the most recent `2.x` version.