<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'produtos',
   'indexes' => 
   array(
   'fk_usuario' => 
   array(
    'columns' => 
    array(
    0 => 'id_usuario',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'categoria',
   'type' => 'string',
   'columnName' => 'categoria',
   'length' => 255,
   'nullable' => false,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'nome',
   'type' => 'string',
   'columnName' => 'nome',
   'length' => 255,
   'nullable' => false,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'descricao',
   'type' => 'text',
   'columnName' => 'descricao',
   'length' => 65535,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'preco',
   'type' => 'decimal',
   'columnName' => 'preco',
   'precision' => 10,
   'scale' => 2,
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'localizacao',
   'type' => 'string',
   'columnName' => 'localizacao',
   'length' => 255,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'imagem',
   'type' => 'blob',
   'columnName' => 'imagem',
   'length' => 0,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'columnName' => 'id',
   'id' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);
$metadata->mapOneToOne(array(
   'fieldName' => 'idUsuario',
   'targetEntity' => 'App\\\\Entity\\\\Usuários',
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
    'name' => 'id_usuario',
    'referencedColumnName' => 'ID',
   ),
   ),
   'orphanRemoval' => false,
  ));