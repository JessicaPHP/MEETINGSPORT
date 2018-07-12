<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'membres',
   'indexes' => 
   array(
   'sport_favoris' => 
   array(
    'columns' => 
    array(
    0 => 'idSport',
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
   'fieldName' => 'nom',
   'columnName' => 'nom',
   'type' => 'string',
   'nullable' => false,
   'length' => 50,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'prenom',
   'columnName' => 'prenom',
   'type' => 'string',
   'nullable' => false,
   'length' => 50,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'pseudo',
   'columnName' => 'pseudo',
   'type' => 'string',
   'nullable' => false,
   'length' => 50,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'email',
   'columnName' => 'email',
   'type' => 'string',
   'nullable' => false,
   'length' => 50,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'password',
   'columnName' => 'password',
   'type' => 'string',
   'nullable' => false,
   'length' => 50,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'birthday',
   'columnName' => 'birthday',
   'type' => 'date',
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'adresse',
   'columnName' => 'adresse',
   'type' => 'string',
   'nullable' => false,
   'length' => 50,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'codepostal',
   'columnName' => 'codePostal',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'ville',
   'columnName' => 'ville',
   'type' => 'string',
   'nullable' => false,
   'length' => 50,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idsport',
   'columnName' => 'idSport',
   'type' => 'integer',
   'nullable' => false,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'niveau',
   'columnName' => 'niveau',
   'type' => 'string',
   'nullable' => false,
   'length' => 50,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'sexe',
   'columnName' => 'sexe',
   'type' => 'string',
   'nullable' => false,
   'length' => 10,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'abonnementnewsletter',
   'columnName' => 'abonnementNewsletter',
   'type' => 'boolean',
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'dateinscription',
   'columnName' => 'dateInscription',
   'type' => 'date',
   'nullable' => false,
   'options' => 
   array(
   'default' => '2018-07-11',
   ),
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);