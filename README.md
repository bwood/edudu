
In order for the edudu module to function properly, you will have to import the content-types
provided in the  `export/` directory into your site.
You will need the `bundle_copy` and `ctools` modules installed and enabled for this.


The github_resource content type (should have been called
edudu_github_resource) should use auto_nodetitle.module to set the
title to [node:field_edudu_github_user_or_org]

This code relies on https://github.com/KnpLabs/php-github-api.

