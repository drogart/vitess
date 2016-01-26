<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: query.proto
//   Date: 2016-01-22 01:34:42

namespace Vitess\Proto\Query {

  class Target extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $keyspace = null;
    
    /**  @var string */
    public $shard = null;
    
    /**  @var int - \Vitess\Proto\Topodata\TabletType */
    public $tablet_type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'query.Target');

      // OPTIONAL STRING keyspace = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "keyspace";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING shard = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "shard";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM tablet_type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "tablet_type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Topodata\TabletType';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <keyspace> has a value
     *
     * @return boolean
     */
    public function hasKeyspace(){
      return $this->_has(1);
    }
    
    /**
     * Clear <keyspace> value
     *
     * @return \Vitess\Proto\Query\Target
     */
    public function clearKeyspace(){
      return $this->_clear(1);
    }
    
    /**
     * Get <keyspace> value
     *
     * @return string
     */
    public function getKeyspace(){
      return $this->_get(1);
    }
    
    /**
     * Set <keyspace> value
     *
     * @param string $value
     * @return \Vitess\Proto\Query\Target
     */
    public function setKeyspace( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <shard> has a value
     *
     * @return boolean
     */
    public function hasShard(){
      return $this->_has(2);
    }
    
    /**
     * Clear <shard> value
     *
     * @return \Vitess\Proto\Query\Target
     */
    public function clearShard(){
      return $this->_clear(2);
    }
    
    /**
     * Get <shard> value
     *
     * @return string
     */
    public function getShard(){
      return $this->_get(2);
    }
    
    /**
     * Set <shard> value
     *
     * @param string $value
     * @return \Vitess\Proto\Query\Target
     */
    public function setShard( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <tablet_type> has a value
     *
     * @return boolean
     */
    public function hasTabletType(){
      return $this->_has(3);
    }
    
    /**
     * Clear <tablet_type> value
     *
     * @return \Vitess\Proto\Query\Target
     */
    public function clearTabletType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <tablet_type> value
     *
     * @return int - \Vitess\Proto\Topodata\TabletType
     */
    public function getTabletType(){
      return $this->_get(3);
    }
    
    /**
     * Set <tablet_type> value
     *
     * @param int - \Vitess\Proto\Topodata\TabletType $value
     * @return \Vitess\Proto\Query\Target
     */
    public function setTabletType( $value){
      return $this->_set(3, $value);
    }
  }
}
