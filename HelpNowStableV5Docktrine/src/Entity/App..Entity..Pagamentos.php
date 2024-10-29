<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'pagamentos',
   'indexes' => 
   array(
   'id_usuario' => 
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
   'fieldName' => 'valor',
   'type' => 'decimal',
   'columnName' => 'valor',
   'precision' => 10,
   'scale' => 2,
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'dataPagamento',
   'type' => 'date',
   'columnName' => 'data_pagamento',
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'metodoPagamento',
   'type' => 'string',
   'columnName' => 'metodo_pagamento',
   'length' => 50,
   'nullable' => false,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'statusPagamento',
   'type' => 'string',
   'columnName' => 'status_pagamento',
   'length' => 20,
   'nullable' => false,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'referenciaExterna',
   'type' => 'string',
   'columnName' => 'referencia_externa',
   'length' => 100,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'idPagamento',
   'type' => 'integer',
   'columnName' => 'id_pagamento',
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