Before enabling these module on a site make sure that the
content-types. See the exports/ directory for ctools exports.

The github_resource content type (should have been called
edudu_github_resource) should use auto_nodetitle.module to set the
title to [node:field_edudu_github_user_or_org]

This code relies on https://github.com/KnpLabs/php-github-api

