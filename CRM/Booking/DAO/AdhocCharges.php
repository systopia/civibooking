<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from /home/dev/civicrm/civicrm-buildkit/build/dmaster/sites/default/files/civicrm/ext/civibooking/xml/schema/CRM/Booking/AdhocCharges.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:51c20df6849bea47e37e0468fff20575)
 */

/**
 * Database access object for the AdhocCharges entity.
 */
class CRM_Booking_DAO_AdhocCharges extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_booking_adhoc_charges';

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
   * FK to Booking ID
   *
   * @var int
   */
  public $booking_id;

  /**
   * FK to Item ID
   *
   * @var int
   */
  public $item_id;

  /**
   * @var int
   */
  public $quantity;

  /**
   * @var bool
   */
  public $is_cancelled;

  /**
   * @var bool
   */
  public $is_deleted;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_booking_adhoc_charges';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'booking_id', 'civicrm_booking', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'item_id', 'civicrm_booking_adhoc_charges_item', 'id');
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
          'where' => 'civicrm_booking_adhoc_charges.id',
          'table_name' => 'civicrm_booking_adhoc_charges',
          'entity' => 'AdhocCharges',
          'bao' => 'CRM_Booking_DAO_AdhocCharges',
          'localizable' => 0,
        ],
        'booking_id' => [
          'name' => 'booking_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => CRM_Booking_ExtensionUtil::ts('FK to Booking ID'),
          'required' => TRUE,
          'where' => 'civicrm_booking_adhoc_charges.booking_id',
          'table_name' => 'civicrm_booking_adhoc_charges',
          'entity' => 'AdhocCharges',
          'bao' => 'CRM_Booking_DAO_AdhocCharges',
          'localizable' => 0,
        ],
        'item_id' => [
          'name' => 'item_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => CRM_Booking_ExtensionUtil::ts('FK to Item ID'),
          'required' => TRUE,
          'where' => 'civicrm_booking_adhoc_charges.item_id',
          'table_name' => 'civicrm_booking_adhoc_charges',
          'entity' => 'AdhocCharges',
          'bao' => 'CRM_Booking_DAO_AdhocCharges',
          'localizable' => 0,
        ],
        'quantity' => [
          'name' => 'quantity',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_Booking_ExtensionUtil::ts('Quantity'),
          'required' => TRUE,
          'where' => 'civicrm_booking_adhoc_charges.quantity',
          'table_name' => 'civicrm_booking_adhoc_charges',
          'entity' => 'AdhocCharges',
          'bao' => 'CRM_Booking_DAO_AdhocCharges',
          'localizable' => 0,
        ],
        'is_cancelled' => [
          'name' => 'is_cancelled',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => CRM_Booking_ExtensionUtil::ts('Slot is cancelled'),
          'import' => TRUE,
          'where' => 'civicrm_booking_adhoc_charges.is_cancelled',
          'export' => TRUE,
          'default' => '0',
          'table_name' => 'civicrm_booking_adhoc_charges',
          'entity' => 'AdhocCharges',
          'bao' => 'CRM_Booking_DAO_AdhocCharges',
          'localizable' => 0,
        ],
        'is_deleted' => [
          'name' => 'is_deleted',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => CRM_Booking_ExtensionUtil::ts('Slot is in the Trash'),
          'import' => TRUE,
          'where' => 'civicrm_booking_adhoc_charges.is_deleted',
          'export' => TRUE,
          'default' => '0',
          'table_name' => 'civicrm_booking_adhoc_charges',
          'entity' => 'AdhocCharges',
          'bao' => 'CRM_Booking_DAO_AdhocCharges',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'booking_adhoc_charges', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'booking_adhoc_charges', $prefix, []);
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
      'index_is_cancelled' => [
        'name' => 'index_is_cancelled',
        'field' => [
          0 => 'is_cancelled',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_booking_adhoc_charges::0::is_cancelled',
      ],
      'index_is_deleted' => [
        'name' => 'index_is_deleted',
        'field' => [
          0 => 'is_deleted',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_booking_adhoc_charges::0::is_deleted',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
