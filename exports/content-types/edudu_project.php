$data = array(
  'bundles' => array(
    'edudu_project' => (object) array(
      'type' => 'edudu_project',
      'name' => 'eduDU Project',
      'base' => 'node_content',
      'module' => 'node',
      'description' => 'An entity containing metadata about a project',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'edudu_project',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
  ),
  'fields' => array(
    'field_edudu_code_type' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'allowed_values' => array(
          0 => array(
            'vocabulary' => 'code_type',
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
              'field_data_field_edudu_code_type' => array(
                'tid' => 'field_edudu_code_type_tid',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_code_type' => array(
                'tid' => 'field_edudu_code_type_tid',
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
      'field_name' => 'field_edudu_code_type',
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
        'node' => array(
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_core' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'max_length' => '50',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_edudu_core' => array(
                'value' => 'field_edudu_core_value',
                'format' => 'field_edudu_core_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_core' => array(
                'value' => 'field_edudu_core_value',
                'format' => 'field_edudu_core_format',
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
      'field_name' => 'field_edudu_core',
      'type' => 'text',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'varchar',
          'length' => '50',
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
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_drupal_project_name' => array(
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
              'field_data_field_edudu_drupal_project_name' => array(
                'value' => 'field_edudu_drupal_project_name_value',
                'format' => 'field_edudu_drupal_project_name_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_drupal_project_name' => array(
                'value' => 'field_edudu_drupal_project_name_value',
                'format' => 'field_edudu_drupal_project_name_format',
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
      'field_name' => 'field_edudu_drupal_project_name',
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
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_info_file' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'display_field' => 0,
        'display_default' => 0,
        'uri_scheme' => 'public',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_edudu_info_file' => array(
                'fid' => 'field_edudu_info_file_fid',
                'display' => 'field_edudu_info_file_display',
                'description' => 'field_edudu_info_file_description',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_info_file' => array(
                'fid' => 'field_edudu_info_file_fid',
                'display' => 'field_edudu_info_file_display',
                'description' => 'field_edudu_info_file_description',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'fid' => array(
          'table' => 'file_managed',
          'columns' => array(
            'fid' => 'fid',
          ),
        ),
      ),
      'indexes' => array(
        'fid' => array(
          0 => 'fid',
        ),
      ),
      'field_name' => 'field_edudu_info_file',
      'type' => 'file',
      'module' => 'file',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'fid' => array(
          'description' => 'The {file_managed}.fid being referenced in this field.',
          'type' => 'int',
          'not null' => FALSE,
          'unsigned' => TRUE,
        ),
        'display' => array(
          'description' => 'Flag to control whether this file should be displayed when viewing content.',
          'type' => 'int',
          'size' => 'tiny',
          'unsigned' => TRUE,
          'not null' => TRUE,
          'default' => 1,
        ),
        'description' => array(
          'description' => 'A description of the file.',
          'type' => 'text',
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_php_version' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'max_length' => '50',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_edudu_php_version' => array(
                'value' => 'field_edudu_php_version_value',
                'format' => 'field_edudu_php_version_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_php_version' => array(
                'value' => 'field_edudu_php_version_value',
                'format' => 'field_edudu_php_version_format',
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
      'field_name' => 'field_edudu_php_version',
      'type' => 'text',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'varchar',
          'length' => '50',
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
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_project_datestamp' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'granularity' => array(
          'month' => 'month',
          'day' => 'day',
          'hour' => 'hour',
          'minute' => 'minute',
          'second' => 'second',
          'year' => 'year',
        ),
        'tz_handling' => 'none',
        'timezone_db' => '',
        'cache_enabled' => 0,
        'cache_count' => '4',
        'todate' => '',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_edudu_project_datestamp' => array(
                'value' => 'field_edudu_project_datestamp_value',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_project_datestamp' => array(
                'value' => 'field_edudu_project_datestamp_value',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(),
      'indexes' => array(),
      'field_name' => 'field_edudu_project_datestamp',
      'type' => 'datestamp',
      'module' => 'date',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'int',
          'not null' => FALSE,
          'sortable' => TRUE,
          'views' => TRUE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_project_dependencies' => array(
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
              'field_data_field_edudu_project_dependencies' => array(
                'value' => 'field_edudu_project_dependencies_value',
                'format' => 'field_edudu_project_dependencies_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_project_dependencies' => array(
                'value' => 'field_edudu_project_dependencies_value',
                'format' => 'field_edudu_project_dependencies_format',
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
      'field_name' => 'field_edudu_project_dependencies',
      'type' => 'text',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '-1',
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
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_project_description' => array(
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
              'field_data_field_edudu_project_description' => array(
                'value' => 'field_edudu_project_description_value',
                'format' => 'field_edudu_project_description_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_project_description' => array(
                'value' => 'field_edudu_project_description_value',
                'format' => 'field_edudu_project_description_format',
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
      'field_name' => 'field_edudu_project_description',
      'type' => 'text_long',
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
        'format' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_project_download_url' => array(
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
              'field_data_field_edudu_project_download_url' => array(
                'value' => 'field_edudu_project_download_url_value',
                'format' => 'field_edudu_project_download_url_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_project_download_url' => array(
                'value' => 'field_edudu_project_download_url_value',
                'format' => 'field_edudu_project_download_url_format',
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
      'field_name' => 'field_edudu_project_download_url',
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
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_project_html_url' => array(
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
              'field_data_field_edudu_project_html_url' => array(
                'value' => 'field_edudu_project_html_url_value',
                'format' => 'field_edudu_project_html_url_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_project_html_url' => array(
                'value' => 'field_edudu_project_html_url_value',
                'format' => 'field_edudu_project_html_url_format',
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
      'field_name' => 'field_edudu_project_html_url',
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
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_project_machine_nam' => array(
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
              'field_data_field_edudu_project_machine_nam' => array(
                'value' => 'field_edudu_project_machine_nam_value',
                'format' => 'field_edudu_project_machine_nam_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_project_machine_nam' => array(
                'value' => 'field_edudu_project_machine_nam_value',
                'format' => 'field_edudu_project_machine_nam_format',
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
      'field_name' => 'field_edudu_project_machine_nam',
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
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_project_notes' => array(
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
              'field_data_field_edudu_project_notes' => array(
                'value' => 'field_edudu_project_notes_value',
                'summary' => 'field_edudu_project_notes_summary',
                'format' => 'field_edudu_project_notes_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_project_notes' => array(
                'value' => 'field_edudu_project_notes_value',
                'summary' => 'field_edudu_project_notes_summary',
                'format' => 'field_edudu_project_notes_format',
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
      'field_name' => 'field_edudu_project_notes',
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
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_project_version' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'max_length' => '100',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_edudu_project_version' => array(
                'value' => 'field_edudu_project_version_value',
                'format' => 'field_edudu_project_version_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_project_version' => array(
                'value' => 'field_edudu_project_version_value',
                'format' => 'field_edudu_project_version_format',
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
      'field_name' => 'field_edudu_project_version',
      'type' => 'text',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'varchar',
          'length' => '100',
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
          0 => 'edudu_project',
        ),
      ),
    ),
    'field_edudu_version_control_url' => array(
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
              'field_data_field_edudu_version_control_url' => array(
                'value' => 'field_edudu_version_control_url_value',
                'format' => 'field_edudu_version_control_url_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_edudu_version_control_url' => array(
                'value' => 'field_edudu_version_control_url_value',
                'format' => 'field_edudu_version_control_url_format',
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
      'field_name' => 'field_edudu_version_control_url',
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
          0 => 'edudu_project',
        ),
      ),
    ),
  ),
  'instances' => array(
    'field_edudu_code_type' => array(
      0 => array(
        'label' => 'Code Type',
        'widget' => array(
          'weight' => '14',
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
            'label' => 'inline',
            'type' => 'taxonomy_term_reference_link',
            'weight' => '15',
            'settings' => array(),
            'module' => 'taxonomy',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'Briefly describe the type of code. E.g. "Feature(s)," "Module(s)"',
        'default_value' => NULL,
        'field_name' => 'field_edudu_code_type',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_core' => array(
      0 => array(
        'label' => 'Drupal Core',
        'widget' => array(
          'weight' => '11',
          'type' => 'text_textfield',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'size' => '10',
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
            'label' => 'inline',
            'type' => 'text_default',
            'weight' => '1',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_edudu_core',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_drupal_project_name' => array(
      0 => array(
        'label' => 'Drupal Project Name',
        'widget' => array(
          'weight' => '3',
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
            'label' => 'inline',
            'type' => 'text_default',
            'weight' => '13',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_edudu_drupal_project_name',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_info_file' => array(
      0 => array(
        'label' => 'Drupal .info File',
        'widget' => array(
          'weight' => '2',
          'type' => 'file_generic',
          'module' => 'file',
          'active' => 1,
          'settings' => array(
            'progress_indicator' => 'throbber',
          ),
        ),
        'settings' => array(
          'file_directory' => 'info_files',
          'file_extensions' => 'info',
          'max_filesize' => '2MB',
          'description_field' => 0,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'hidden',
            'weight' => '11',
            'settings' => array(),
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 1,
        'description' => 'Upload the .info file for the Drupal project',
        'field_name' => 'field_edudu_info_file',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_php_version' => array(
      0 => array(
        'label' => 'PHP Version',
        'widget' => array(
          'weight' => '12',
          'type' => 'text_textfield',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'size' => '10',
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
            'label' => 'inline',
            'type' => 'text_default',
            'weight' => '2',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_edudu_php_version',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_project_datestamp' => array(
      0 => array(
        'label' => 'Drupal Project Datestamp',
        'widget' => array(
          'weight' => '7',
          'type' => 'date_text',
          'module' => 'date',
          'active' => 1,
          'settings' => array(
            'input_format' => 'm/d/Y - H:i:s',
            'input_format_custom' => '',
            'year_range' => '-3:+3',
            'increment' => 15,
            'label_position' => 'above',
            'text_parts' => array(),
          ),
        ),
        'settings' => array(
          'default_value' => 'blank',
          'default_value_code' => '',
          'default_value2' => 'same',
          'default_value_code2' => '',
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'inline',
            'type' => 'date_default',
            'weight' => '14',
            'settings' => array(
              'format_type' => 'long',
              'multiple_number' => '',
              'multiple_from' => '',
              'multiple_to' => '',
              'fromto' => 'both',
            ),
            'module' => 'date',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'field_name' => 'field_edudu_project_datestamp',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_project_dependencies' => array(
      0 => array(
        'label' => 'Dependencies',
        'widget' => array(
          'weight' => '13',
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
            'label' => 'inline',
            'type' => 'text_default',
            'weight' => '4',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_edudu_project_dependencies',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_project_description' => array(
      0 => array(
        'label' => 'Description (from .info)',
        'widget' => array(
          'weight' => '5',
          'type' => 'text_textarea',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'rows' => '2',
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
            'weight' => '12',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'The description parameter from the .info file',
        'default_value' => NULL,
        'field_name' => 'field_edudu_project_description',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_project_download_url' => array(
      0 => array(
        'label' => 'Download URL',
        'widget' => array(
          'weight' => '8',
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
            'label' => 'inline',
            'type' => 'text_default',
            'weight' => '9',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 1,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_edudu_project_download_url',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_project_html_url' => array(
      0 => array(
        'label' => 'HTML URL',
        'widget' => array(
          'weight' => '10',
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
            'label' => 'inline',
            'type' => 'text_default',
            'weight' => '10',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'URL for a webpage describing the project.',
        'default_value' => NULL,
        'field_name' => 'field_edudu_project_html_url',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_project_machine_nam' => array(
      0 => array(
        'label' => 'Drupal Project Machine Name',
        'widget' => array(
          'weight' => '4',
          'type' => 'text_textfield',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'size' => '25',
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
            'label' => 'inline',
            'type' => 'text_default',
            'weight' => '3',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_edudu_project_machine_nam',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_project_notes' => array(
      0 => array(
        'label' => 'Submitter Notes',
        'widget' => array(
          'weight' => '15',
          'type' => 'text_textarea_with_summary',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'rows' => '5',
            'summary_rows' => 5,
          ),
        ),
        'settings' => array(
          'text_processing' => '0',
          'display_summary' => 0,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'text_default',
            'weight' => '7',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_edudu_project_notes',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_project_version' => array(
      0 => array(
        'label' => 'Drupal Project Version',
        'widget' => array(
          'weight' => '6',
          'type' => 'text_textfield',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'size' => '10',
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
            'label' => 'inline',
            'type' => 'text_default',
            'weight' => '6',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_edudu_project_version',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
    'field_edudu_version_control_url' => array(
      0 => array(
        'label' => 'Version Control URL',
        'widget' => array(
          'weight' => '9',
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
            'label' => 'inline',
            'type' => 'text_default',
            'weight' => '8',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_edudu_version_control_url',
        'entity_type' => 'node',
        'bundle' => 'edudu_project',
        'deleted' => '0',
      ),
    ),
  ),
);
