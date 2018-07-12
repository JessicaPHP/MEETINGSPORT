<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'visites',
   'indexes' => 
   array(
   'id_envoyeur' => 
   array(
    'columns' => 
    array(
    0 => 'id_envoyeur',
    ),
   ),
   'id_receveur' => 
   array(
    'columns' => 
    array(
    0 => 'id_receveur',
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
   'unsigned' => false,
   ),
   'id' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'date',
   'columnName' => 'date',
   'type' => 'datetime',
   'nullable' => false,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);
$metadata->mapOneToOne(array(
   'fieldName' => 'idReceveur',
   'targetEntity' => 'Membres',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'mappedBy' => NULL,
   'inversedBy' => NULL,
   'joinColumns' => 
   array(
   0 => 
   array(
    'name' => 'id_receveur',
    'referencedColumnName' => 'id',
   ),
   ),
   'orphanRemoval' => false,
  ));
$metadata->mapOneToOne(array(
   'fieldName' => 'idEnvoyeur',
   'targetEntity' => 'Membres',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'mappedBy' => NULL,
   'inversedBy' => NULL,
   'joinColumns' => 
   array(
   0 => 
   array(
    'name' => 'id_envoyeur',
    'referencedColumnName' => 'id',
   ),
   ),
   'orphanRemoval' => false,
  ));