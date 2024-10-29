<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'areas_atuacao',
   'uniqueConstraints' => 
   array(
   'Nome_da_Área_de_Atuação' => 
   array(
    'columns' => 
    array(
    0 => 'Nome_da_Área_de_Atuação',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'nomeDaÁreaDeAtuação',
   'type' => 'string',
   'columnName' => 'Nome_da_Área_de_Atuação',
   'length' => 255,
   'nullable' => false,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'columnName' => 'ID',
   'id' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);
$metadata->mapManyToMany(array(
   'fieldName' => 'idProfissional',
   'targetEntity' => 'App\\\\Entity\\\\Usuários',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'mappedBy' => 'idAreaAtuacao',
  ));