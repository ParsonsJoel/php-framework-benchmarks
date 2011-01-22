<?php
/**
 * 
 * Table metadata for the Mock_Solar_Model_Metas model class.
 * 
 * This class is auto-generated by make-model; any changes you make will be
 * overwritten the next time you use make-model.  Modify the Mock_Solar_Model_Metas
 * class instead of this one.
 * 
 */
class Mock_Solar_Model_Metas_Metadata extends Solar_Sql_Model_Metadata
{
    public $table_name = 'test_solar_metas';
    
    public $table_cols = array (
      'id' => array (
        'name' => 'id',
        'type' => 'int',
        'size' => NULL,
        'scope' => NULL,
        'default' => NULL,
        'require' => true,
        'primary' => true,
        'autoinc' => true,
      ),
      'node_id' => array (
        'name' => 'node_id',
        'type' => 'int',
        'size' => NULL,
        'scope' => NULL,
        'default' => NULL,
        'require' => true,
        'primary' => false,
        'autoinc' => false,
      ),
      'last_comment_id' => array (
        'name' => 'last_comment_id',
        'type' => 'int',
        'size' => NULL,
        'scope' => NULL,
        'default' => NULL,
        'require' => false,
        'primary' => false,
        'autoinc' => false,
      ),
      'last_comment_by' => array (
        'name' => 'last_comment_by',
        'type' => 'varchar',
        'size' => 255,
        'scope' => NULL,
        'default' => NULL,
        'require' => false,
        'primary' => false,
        'autoinc' => false,
      ),
      'last_comment_at' => array (
        'name' => 'last_comment_at',
        'type' => 'timestamp',
        'size' => NULL,
        'scope' => NULL,
        'default' => NULL,
        'require' => false,
        'primary' => false,
        'autoinc' => false,
      ),
      'comment_count' => array (
        'name' => 'comment_count',
        'type' => 'int',
        'size' => NULL,
        'scope' => NULL,
        'default' => '0',
        'require' => false,
        'primary' => false,
        'autoinc' => false,
      ),
    );
    
    public $index_info = array (
      'node_id' => array (
        'type' => 'normal',
        'cols' => array (
          0 => 'node_id',
        ),
      ),
    );
}