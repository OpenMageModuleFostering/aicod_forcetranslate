<?php


class Aicod_ForceTranslate_Model_Translate extends Mage_Core_Model_Translate
{
    protected function _loadThemeTranslation($forceReload = false)
    {
        $file = Mage::getDesign()->getLocaleFileName('translate_force.csv');
        $scope = 'Aicod_ForceTranslate';
        $data = $this->_getFileData($file);
        foreach($data as $v=>$vt)
          $this->_data[$scope.self::SCOPE_SEPARATOR.$v] = $vt;
        
        //print_r($data);
        //print_r($this->getData());
        //exit;
        
        return parent::_loadThemeTranslation($forceReload);
    }

    protected function _getTranslatedString($text, $code)
    {
        /*$translated = '';
        if (array_key_exists($code, $this->getData())) {
            $translated = $this->_data[$code];
        }
        elseif (array_key_exists($text, $this->getData())) {
            $translated = $this->_data[$text];
        }
        else {
            $translated = $text;
        }
        return $translated;*/
        
        //return "test";
        
        //print_r($this->getData());
        //exit;
        
        //$file = Mage::getDesign()->getLocaleFileName('translate_force.csv');
        //$file_data = $this->_getFileData($file);
        //if(array_key_exists($text,$file_data))
        //  return $file_data[$text];
        
        $scope = 'Aicod_ForceTranslate';
        $tkey = $scope.self::SCOPE_SEPARATOR.$text;
        if(array_key_exists($tkey,$this->_data))
          return $this->_data[$tkey];
        
        return parent::_getTranslatedString($text,$code);
    }
}
