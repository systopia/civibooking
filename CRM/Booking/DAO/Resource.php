<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from /home/dev/civicrm/civicrm-buildkit/build/dmaster/sites/default/files/civicrm/ext/civibooking/xml/schema/CRM/Booking/Resource.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:6ee1b8e79f9ed1a217210155f7ed0ec6)
 */

/**
 * Database access object for the Resource entity.
 */
class CRM_Booking_DAO_Resource extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_booking_resource';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * @var int
   */
  public $id;

  /**
   * FK to resource configuration option set
   *
   * @var int
   */
  public $set_id;

  /**
   * @var string
   */
  public $label;

  /**
   * @var string
   */
  public $description;

  /**
   * The type associated with this resource. Implicit FK to option_value row in booking_resource_type option_group.
   *
   * @var string
   */
  public $type_id;

  /**
   * The location associated with this resource. Implicit FK to option_value row in booking_resource_location option_group.
   *
   * @var string
   */
  public $location_id;

  /**
   * @var int
   */
  public $weight;

  /**
   * @var bool
   */
  public $is_unlimited;

  /**
   * @var bool
   */
  public $is_active;

  /**
   * @var bool
   */
  public $is_deleted;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_booking_resource';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'set_id', 'civicrm_booking_resource_config_set', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => TRUE,
          'where' => 'civicrm_booking_resource.id',
          'table_name' => 'civicrm_booking_resource',
          'entity' => 'Resource',
          'bao' => 'CRM_Booking_DAO_Resource',
          'localizable' => 0,
        ],
        'set_id' => [
          'name' => 'set_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => CRM_Booking_ExtensionUtil::ts('FK to resource configuration option set'),
          'where' => 'civicrm_booking_resource.set_id',
          'table_name' => 'civicrm_booking_resource',
          'entity' => 'Resource',
          'bao' => 'CRM_Booking_DAO_Resource',
          'localizable' => 0,
        ],
        'booking_resource_label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Booking_ExtensionUtil::ts('Label'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_booking_resource.label',
          'table_name' => 'civicrm_booking_resource',
          'entity' => 'Resource',
          'bao' => 'CRM_Booking_DAO_Resource',
          'localizable' => 0,
        ],
        'booking_resource_description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Booking_ExtensionUtil::ts('Label'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_booking_resource.description',
          'table_name' => 'civicrm_booking_resource',
          'entity' => 'Resource',
          'bao' => 'CRM_Booking_DAO_Resource',
          'localizable' => 0,
        ],
        'type_id' => [
          'name' => 'type_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Booking_ExtensionUtil::ts('Type ID'),
          'description' => CRM_Booking_ExtensionUtil::ts('The type associated with this resource. Implicit FK to option_value row in booking_resource_type option_group.'),
          'required' => TRUE,
          'maxlength' => 512,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_booking_resource.type_id',
          'table_name' => 'civicrm_booking_resource',
          'entity' => 'Resource',
          'bao' => 'CRM_Booking_DAO_Resource',
          'localizable' => 0,
          'pseudoconstant' => [
            'optionGroupName' => 'booking_resource_type',
            'optionEditPath' => 'civicrm/admin/options/booking_resource_type',
          ],
        ],
        'location_id' => [
          'name' => 'location_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Booking_ExtensionUtil::ts('Location ID'),
          'description' => CRM_Booking_ExtensionUtil::ts('The location associated with this resource. Implicit FK to option_value row in booking_resource_location option_group.'),
          'maxlength' => 512,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_booking_resource.location_id',
          'table_name' => 'civicrm_booking_resource',
          'entity' => 'Resource',
          'bao' => 'CRM_Booking_DAO_Resource',
          'localizable' => 0,
          'pseudoconstant' => [
            'optionGroupName' => 'booking_resource_location',
            'optionEditPath' => 'civicrm/admin/options/booking_resource_location',
          ],
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_Booking_ExtensionUtil::ts('Weight'),
          'required' => TRUE,
          'where' => 'civicrm_booking_resource.weight',
          'table_name' => 'civicrm_booking_resource',
          'entity' => 'Resource',
          'bao' => 'CRM_Booking_DAO_Resource',
          'localizable' => 0,
        ],
        'is_unlimited' => [
          'name' => 'is_unlimited',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'required' => TRUE,
          'where' => 'civicrm_booking_resource.is_unlimited',
          'default' => '0',
          'table_name' => 'civicrm_booking_resource',
          'entity' => 'Resource',
          'bao' => 'CRM_Booking_DAO_Resource',
          'localizable' => 0,
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => CRM_Booking_ExtensionUtil::ts('Slot is cancelled'),
          'import' => TRUE,
          'where' => 'civicrm_booking_resource.is_active',
          'export' => TRUE,
          'default' => '1',
          'table_name' => 'civicrm_booking_resource',
          'entity' => 'Resource',
          'bao' => 'CRM_Booking_DAO_Resource',
          'localizable' => 0,
        ],
        'is_deleted' => [
          'name' => 'is_deleted',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => CRM_Booking_ExtensionUtil::ts('Slot is in the Trash'),
          'import' => TRUE,
          'where' => 'civicrm_booking_resource.is_deleted',
          'export' => TRUE,
          'default' => '0',
          'table_name' => 'civicrm_booking_resource',
          'entity' => 'Resource',
          'bao' => 'CRM_Booking_DAO_Resource',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'booking_resource', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'booking_resource', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_is_unlimited' => [
        'name' => 'index_is_unlimited',
        'field' => [
          0 => 'is_unlimited',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_booking_resource::0::is_unlimited',
      ],
      'index_is_active' => [
        'name' => 'index_is_active',
        'field' => [
          0 => 'is_active',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_booking_resource::0::is_active',
      ],
      'index_is_deleted' => [
        'name' => 'index_is_deleted',
        'field' => [
          0 => 'is_deleted',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_booking_resource::0::is_deleted',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
