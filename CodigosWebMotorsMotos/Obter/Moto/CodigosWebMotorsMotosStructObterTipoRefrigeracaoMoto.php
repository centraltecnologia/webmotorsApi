<?php
/**
 * File for class CodigosWebMotorsMotosStructObterTipoRefrigeracaoMoto
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructObterTipoRefrigeracaoMoto originally named obterTipoRefrigeracaoMoto
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructObterTipoRefrigeracaoMoto extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The hashAutenticacao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $hashAutenticacao;
    /**
     * Constructor method for obterTipoRefrigeracaoMoto
     * @see parent::__construct()
     * @param string $_hashAutenticacao
     * @return CodigosWebMotorsMotosStructObterTipoRefrigeracaoMoto
     */
    public function __construct($_hashAutenticacao = NULL)
    {
        parent::__construct(array('hashAutenticacao'=>$_hashAutenticacao),false);
    }
    /**
     * Get hashAutenticacao value
     * @return string|null
     */
    public function getHashAutenticacao()
    {
        return $this->hashAutenticacao;
    }
    /**
     * Set hashAutenticacao value
     * @param string $_hashAutenticacao the hashAutenticacao
     * @return string
     */
    public function setHashAutenticacao($_hashAutenticacao)
    {
        return ($this->hashAutenticacao = $_hashAutenticacao);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructObterTipoRefrigeracaoMoto
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
