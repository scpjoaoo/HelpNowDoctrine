<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'serviços',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'nomeDoServiço',
   'type' => 'string',
   'columnName' => 'Nome_do_Serviço',
   'length' => 255,
   'nullable' => false,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'descriçãoDoServiço',
   'type' => 'text',
   'columnName' => 'Descrição_do_Serviço',
   'length' => 65535,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'categoriaDoServiço',
   'type' => 'string',
   'columnName' => 'Categoria_do_Serviço',
   'length' => 255,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'preçoBase',
   'type' => 'decimal',
   'columnName' => 'Preço_Base',
   'precision' => 10,
   'scale' => 2,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'columnName' => 'ID',
   'id' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);