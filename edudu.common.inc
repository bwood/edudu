<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bwood
 * Date: 4/30/13
 * Time: 4:22 PM
 * To change this template use File | Settings | File Templates.
 */

//require_once drupal_get_path('module', 'entity' ) . '/entity.module';


/**
 * Check to see if a node exists for a project.
 * If yes, return the loaded node object.  Else return an empty node object.
 * @param $value
 * @param $bundle
 * @param $primary_field
 * @return stdClass
 */
//TODO: Refactor. edudu_entity_exists()
function edudu_entity_exists($value, $bundle, $primary_field) {

  $query = new EntityFieldQuery();
  $query->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', $bundle);
  //if body is needed is that a propertyCondition?
  if ($primary_field == 'title') {
    $query->propertyCondition($primary_field, $value);
  }
  else {
    $query->fieldCondition($primary_field, 'value', $value);
  }


  $result = $query->execute();

  if (isset($result['node'])) {
    if (count($result['node']) > 1) {
      watchdog('warning', 'More than one exisiting node matches: %bundle_name, %value', array(
        '%bundle_name' => $bundle,
        '%value' => $value
      ));
    }
    //get the first one, even if there are multiple. They've been warned.
    $node = array_shift($result['node']);
    if (is_object($node)) {
      return $node;
    }
    else {
      drupal_set_message('warning', t('Found match for %bundle_name, %value, but non-object returned.', array(
        '%bundle_name' => $bundle,
        '%value' => $value
      )));
      return FALSE;
    }
  }
  else {
    return FALSE;
  }

}

/*
function edudu_map_github($field) {
  $map = array(
    //edudu_github_project field => github field
    'title' => 'name',
    'body' => 'description',
  );
  if (array_key_exists($field, $map)) {
    $field = $map[$field];
  }
  $field = str_replace('field_edudu_github_', '', $field);
  return $field;
}
*/

/*
function edudu_entity_references($data, $client) {

  $refs = $client->api('references')->all('eduduorg', $data['name']);

}
*/