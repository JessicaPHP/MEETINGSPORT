<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'villes',
   'uniqueConstraints' => 
   array(
   'ville_code_commune_2' => 
   array(
    'columns' => 
    array(
    0 => 'villeCodeCommune',
    ),
   ),
   'ville_slug' => 
   array(
    'columns' => 
    array(
    0 => 'villeSlug',
    ),
   ),
   ),
   'indexes' => 
   array(
   'ville_departement' => 
   array(
    'columns' => 
    array(
    0 => 'villeDepartement',
    ),
   ),
   'ville_nom' => 
   array(
    'columns' => 
    array(
    0 => 'villeNom',
    ),
   ),
   'ville_nom_reel' => 
   array(
    'columns' => 
    array(
    0 => 'villeNomReel',
    ),
   ),
   'ville_code_commune' => 
   array(
    'columns' => 
    array(
    0 => 'villeCodeCommune',
    ),
   ),
   'ville_code_postal' => 
   array(
    'columns' => 
    array(
    0 => 'villeCodePostal',
    ),
   ),
   'ville_longitude_latitude_deg' => 
   array(
    'columns' => 
    array(
    0 => 'villeLongitudeDeg',
    1 => 'villeLatitudeDeg',
    ),
   ),
   'ville_nom_soundex' => 
   array(
    'columns' => 
    array(
    0 => 'villeNomSoundex',
    ),
   ),
   'ville_nom_metaphone' => 
   array(
    'columns' => 
    array(
    0 => 'villeNomMetaphone',
    ),
   ),
   'ville_population_2010' => 
   array(
    'columns' => 
    array(
    0 => 'villePopulation2010',
    ),
   ),
   'ville_nom_simple' => 
   array(
    'columns' => 
    array(
    0 => 'villeNomSimple',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'columnName' => 'id',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => true,
   ),
   'id' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'villedepartement',
   'columnName' => 'villeDepartement',
   'type' => 'string',
   'nullable' => true,
   'length' => 3,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villeslug',
   'columnName' => 'villeSlug',
   'type' => 'string',
   'nullable' => true,
   'length' => 255,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villenom',
   'columnName' => 'villeNom',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villenomsimple',
   'columnName' => 'villeNomSimple',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villenomreel',
   'columnName' => 'villeNomReel',
   'type' => 'string',
   'nullable' => true,
   'length' => 45,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villenomsoundex',
   'columnName' => 'villeNomSoundex',
   'type' => 'string',
   'nullable' => true,
   'length' => 20,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villenommetaphone',
   'columnName' => 'villeNomMetaphone',
   'type' => 'string',
   'nullable' => true,
   'length' => 22,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villecodepostal',
   'columnName' => 'villeCodePostal',
   'type' => 'string',
   'nullable' => true,
   'length' => 255,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villecommune',
   'columnName' => 'villeCommune',
   'type' => 'string',
   'nullable' => true,
   'length' => 3,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villecodecommune',
   'columnName' => 'villeCodeCommune',
   'type' => 'string',
   'nullable' => false,
   'length' => 5,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villearrondissement',
   'columnName' => 'villeArrondissement',
   'type' => 'smallint',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villecanton',
   'columnName' => 'villeCanton',
   'type' => 'string',
   'nullable' => true,
   'length' => 4,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villeamdi',
   'columnName' => 'villeAmdi',
   'type' => 'smallint',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villepopulation2010',
   'columnName' => 'villePopulation2010',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villepopulation1999',
   'columnName' => 'villePopulation1999',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villepopulation2012',
   'columnName' => 'villePopulation2012',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => true,
   'comment' => 'approximatif',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villedensite2010',
   'columnName' => 'villeDensite2010',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villesurface',
   'columnName' => 'villeSurface',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
  ));
$metadata->mapField(array(
   'fieldName' => 'villelongitudedeg',
   'columnName' => 'villeLongitudeDeg',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
  ));
$metadata->mapField(array(
   'fieldName' => 'villelatitudedeg',
   'columnName' => 'villeLatitudeDeg',
   'type' => 'float',
   'nullable' => true,
   'precision' => 10,
   'scale' => 0,
  ));
$metadata->mapField(array(
   'fieldName' => 'villelongitudegrd',
   'columnName' => 'villeLongitudeGrd',
   'type' => 'string',
   'nullable' => true,
   'length' => 9,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villelatitudegrd',
   'columnName' => 'villeLatitudeGrd',
   'type' => 'string',
   'nullable' => true,
   'length' => 8,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villelongitudedms',
   'columnName' => 'villeLongitudeDms',
   'type' => 'string',
   'nullable' => true,
   'length' => 9,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villelatitudedms',
   'columnName' => 'villeLatitudeDms',
   'type' => 'string',
   'nullable' => true,
   'length' => 8,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villezmin',
   'columnName' => 'villeZmin',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'villezmax',
   'columnName' => 'villeZmax',
   'type' => 'integer',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);