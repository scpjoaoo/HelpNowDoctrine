<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'pedidos',
   'indexes' => 
   array(
   'ID_Profissional' => 
   array(
    'columns' => 
    array(
    0 => 'ID_Profissional',
    ),
   ),
   'ID_Serviço' => 
   array(
    'columns' => 
    array(
    0 => 'ID_Serviço',
    ),
   ),
   'ID_Cliente' => 
   array(
    'columns' => 
    array(
    0 => 'ID_Cliente',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'descriçãoDoProblema',
   'type' => 'text',
   'columnName' => 'Descrição_do_Problema',
   'length' => 65535,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'preçoAcordado',
   'type' => 'decimal',
   'columnName' => 'Preço_Acordado',
   'precision' => 10,
   'scale' => 2,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'dataDoPedido',
   'type' => 'datetime',
   'columnName' => 'Data_do_Pedido',
   'nullable' => true,
   'options' => 
   array(
   'default' => 'CURRENT_TIMESTAMP',
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'statusDoPedido',
   'type' => 'string',
   'columnName' => 'Status_do_Pedido',
   'length' => 50,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'avaliaçãoDoCliente',
   'type' => 'integer',
   'columnName' => 'Avaliação_do_Cliente',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'avaliaçãoDoProfissional',
   'type' => 'integer',
   'columnName' => 'Avaliação_do_Profissional',
   'nullable' => true,
   'options' => 
   array(
   'unsigned' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'columnName' => 'ID',
   'id' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);
$metadata->mapOneToOne(array(
   'fieldName' => 'idServiço',
   'targetEntity' => 'App\\\\Entity\\\\Serviços',
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
    'name' => 'ID_Serviço',
    'referencedColumnName' => 'ID',
   ),
   ),
   'orphanRemoval' => false,
  ));
$metadata->mapOneToOne(array(
   'fieldName' => 'idCliente',
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
    'name' => 'ID_Cliente',
    'referencedColumnName' => 'ID',
   ),
   ),
   'orphanRemoval' => false,
  ));
$metadata->mapOneToOne(array(
   'fieldName' => 'idProfissional',
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
    'name' => 'ID_Profissional',
    'referencedColumnName' => 'ID',
   ),
   ),
   'orphanRemoval' => false,
  ));