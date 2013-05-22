$data = array(
  'bundles' => array(
    'github_resource' => (object) array(
      'type' => 'github_resource',
      'name' => 'Github Resource',
      'base' => 'node_content',
      'module' => 'node',
      'description' => 'Github user or organization containing code of interest',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'github_resource',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
  ),
  'fields' => array(
    'field_edudu_gh_submitter_notes' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_edudu_gh_submitter_notes' => array(
                'value' => 'field_edudu_gh_submitter_notes_value',
                'summary' => 'field_edudu_gh_submitter_notes_summary',
                'format' => 'field_edudu_gh_submitter_notes_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_gh_submitter_notes' => array(
                'value' => 'field_edudu_gh_submitter_notes_value',
                'summary' => 'field_edudu_gh_submitter_notes_summary',
                'format' => 'field_edudu_gh_submitter_notes_format',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'format' => array(
          'table' => 'filter_format',
          'columns' => array(
            'format' => 'format',
          ),
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'field_name' => 'field_edudu_gh_submitter_notes',
      'type' => 'text_with_summary',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'text',
          'size' => 'big',
          'not null' => FALSE,
        ),
        'summary' => array(
          'type' => 'text',
          'size' => 'big',
          'not null' => FALSE,
        ),
        'format' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'github_resource',
        ),
      ),
    ),
    'field_edudu_github_user_or_org' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'max_length' => '255',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_edudu_github_user_or_org' => array(
                'value' => 'field_edudu_github_user_or_org_value',
                'format' => 'field_edudu_github_user_or_org_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_github_user_or_org' => array(
                'value' => 'field_edudu_github_user_or_org_value',
                'format' => 'field_edudu_github_user_or_org_format',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'format' => array(
          'table' => 'filter_format',
          'columns' => array(
            'format' => 'format',
          ),
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'field_name' => 'field_edudu_github_user_or_org',
      'type' => 'text',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'varchar',
          'length' => '255',
          'not null' => FALSE,
        ),
        'format' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'github_resource',
        ),
      ),
    ),
    'field_edudu_institution' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'allowed_values' => array(
          0 => array(
            'vocabulary' => 'edudu_institution',
            'parent' => '0',
          ),
        ),
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_edudu_institution' => array(
                'tid' => 'field_edudu_institution_tid',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_institution' => array(
                'tid' => 'field_edudu_institution_tid',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'tid' => array(
          'table' => 'taxonomy_term_data',
          'columns' => array(
            'tid' => 'tid',
          ),
        ),
      ),
      'indexes' => array(
        'tid' => array(
          0 => 'tid',
        ),
      ),
      'field_name' => 'field_edudu_institution',
      'type' => 'taxonomy_term_reference',
      'module' => 'taxonomy',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'tid' => array(
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'user' => array(
          0 => 'user',
        ),
        'node' => array(
          0 => 'github_resource',
        ),
      ),
    ),
  ),
  'instances' => array(
    'field_edudu_gh_submitter_notes' => array(
      0 => array(
        'label' => 'Submitter Notes',
        'widget' => array(
          'weight' => '36',
          'type' => 'text_textarea_with_summary',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'rows' => '5',
            'summary_rows' => 5,
          ),
        ),
        'settings' => array(
          'text_processing' => '1',
          'display_summary' => 0,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'text_default',
            'settings' => array(),
            'module' => 'text',
            'weight' => 3,
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'Useful information about this resource',
        'default_value' => NULL,
        'field_name' => 'field_edudu_gh_submitter_notes',
        'entity_type' => 'node',
        'bundle' => 'github_resource',
        'deleted' => '0',
      ),
    ),
    'field_edudu_github_user_or_org' => array(
      0 => array(
        'label' => 'GitHub User or Organization Name',
        'widget' => array(
          'weight' => '31',
          'type' => 'text_textfield',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'size' => '60',
          ),
        ),
        'settings' => array(
          'text_processing' => '0',
          'linkit' => array(
            'enable' => 0,
            'insert_plugin' => '',
          ),
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'text_default',
            'settings' => array(),
            'module' => 'text',
            'weight' => 0,
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 1,
        'description' => 'Enter the name of either a Github user or organization.',
        'default_value' => NULL,
        'field_name' => 'field_edudu_github_user_or_org',
        'entity_type' => 'node',
        'bundle' => 'github_resource',
        'deleted' => '0',
      ),
    ),
    'field_edudu_institution' => array(
      0 => array(
        'label' => 'Institution',
        'widget' => array(
          'weight' => '35',
          'type' => 'taxonomy_autocomplete',
          'module' => 'taxonomy',
          'active' => 0,
          'settings' => array(
            'size' => 60,
            'autocomplete_path' => 'taxonomy/autocomplete',
          ),
        ),
        'settings' => array(
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'taxonomy_term_reference_link',
            'settings' => array(),
            'module' => 'taxonomy',
            'weight' => 2,
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'Indicate the institution (if any) with which this Github resource is associated.',
        'default_value' => NULL,
        'field_name' => 'field_edudu_institution',
        'entity_type' => 'node',
        'bundle' => 'github_resource',
        'deleted' => '0',
      ),
    ),
  ),
);
