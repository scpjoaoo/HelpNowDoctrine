<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'usuários',
   'uniqueConstraints' => 
   array(
   'Email' => 
   array(
    'columns' => 
    array(
    0 => 'Email',
    ),
   ),
   ),
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'nome',
   'type' => 'string',
   'columnName' => 'Nome',
   'length' => 255,
   'nullable' => false,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'email',
   'type' => 'string',
   'columnName' => 'Email',
   'length' => 255,
   'nullable' => false,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'senha',
   'type' => 'string',
   'columnName' => 'Senha',
   'length' => 255,
   'nullable' => false,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'telefone',
   'type' => 'string',
   'columnName' => 'Telefone',
   'length' => 20,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'fotoPerfil',
   'type' => 'blob',
   'columnName' => 'Foto_Perfil',
   'length' => 0,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'descrição',
   'type' => 'text',
   'columnName' => 'Descrição',
   'length' => 65535,
   'nullable' => true,
   'options' => 
   array(
   'fixed' => false,
   ),
  ));
$metadata->mapField(array(
   'fieldName' => 'ÉProfissional',
   'type' => 'boolean',
   'columnName' => 'É_Profissional',
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'dataDeCadastro',
   'type' => 'datetime',
   'columnName' => 'Data_de_Cadastro',
   'nullable' => true,
   'options' => 
   array(
   'default' => 'CURRENT_TIMESTAMP',
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
   'joinTable' => 
   array(
   'name' => 'favoritos',
   'joinColumns' => 
   array(
    0 => 
    array(
    'name' => 'ID_Cliente',
    'referencedColumnName' => 'ID',
    ),
   ),
   'inverseJoinColumns' => 
   array(
    0 => 
    array(
    'name' => 'ID_Profissional',
    'referencedColumnName' => 'ID',
    ),
   ),
   ),
  ));
$metadata->mapManyToMany(array(
   'fieldName' => 'idAreaAtuacao',
   'targetEntity' => 'App\\\\Entity\\\\AreasAtuacao',
   'cascade' => 
   array(
   ),
   'fetch' => 2,
   'joinTable' => 
   array(
   'name' => 'profissionais_areas',
   'joinColumns' => 
   array(
    0 => 
    array(
    'name' => 'ID_Profissional',
    'referencedColumnName' => 'ID',
    ),
   ),
   'inverseJoinColumns' => 
   array(
    0 => 
    array(
    'name' => 'ID_Area_Atuacao',
    'referencedColumnName' => 'ID',
    ),
   ),
   ),
  ));