<?php

class Hashlist extends AbstractModel {
  private $modelName = "Hashlist";
  
  // Modelvariables
  private $hashlistId;
  private $hashlistName;
  private $format;
  private $hashTypeId;
  private $hashCount;
  private $saltSeparator;
  private $cracked;
  private $secret;
  private $hexSalt;
  
  
  function __construct($hashlistId, $hashlistName, $format, $hashTypeId, $hashCount, $saltSeparator, $cracked, $secret, $hexSalt) {
    $this->hashlistId = $hashlistId;
    $this->hashlistName = $hashlistName;
    $this->format = $format;
    $this->hashTypeId = $hashTypeId;
    $this->hashCount = $hashCount;
    $this->saltSeparator = $saltSeparator;
    $this->cracked = $cracked;
    $this->secret = $secret;
    $this->hexSalt = $hexSalt;
    
  }
  
  function getKeyValueDict() {
    $dict = array();
    $dict['hashlistId'] = $this->hashlistId;
    $dict['hashlistName'] = $this->hashlistName;
    $dict['format'] = $this->format;
    $dict['hashTypeId'] = $this->hashTypeId;
    $dict['hashCount'] = $this->hashCount;
    $dict['saltSeparator'] = $this->saltSeparator;
    $dict['cracked'] = $this->cracked;
    $dict['secret'] = $this->secret;
    $dict['hexSalt'] = $this->hexSalt;
    
    return $dict;
  }
  
  function getPrimaryKey() {
    return "hashlistId";
  }
  
  function getPrimaryKeyValue() {
    return $this->hashlistId;
  }
  
  function getId() {
    return $this->hashlistId;
  }
  
  function setId($id) {
    $this->hashlistId = $id;
  }
  
  function getHashlistName() {
    return $this->hashlistName;
  }
  
  function setHashlistName($hashlistName) {
    $this->hashlistName = $hashlistName;
  }
  
  function getFormat() {
    return $this->format;
  }
  
  function setFormat($format) {
    $this->format = $format;
  }
  
  function getHashTypeId() {
    return $this->hashTypeId;
  }
  
  function setHashTypeId($hashTypeId) {
    $this->hashTypeId = $hashTypeId;
  }
  
  function getHashCount() {
    return $this->hashCount;
  }
  
  function setHashCount($hashCount) {
    $this->hashCount = $hashCount;
  }
  
  function getSaltSeparator() {
    return $this->saltSeparator;
  }
  
  function setSaltSeparator($saltSeparator) {
    $this->saltSeparator = $saltSeparator;
  }
  
  function getCracked() {
    return $this->cracked;
  }
  
  function setCracked($cracked) {
    $this->cracked = $cracked;
  }
  
  function getSecret() {
    return $this->secret;
  }
  
  function setSecret($secret) {
    $this->secret = $secret;
  }
  
  function getHexSalt() {
    return $this->hexSalt;
  }
  
  function setHexSalt($hexSalt) {
    $this->hexSalt = $hexSalt;
  }
}
