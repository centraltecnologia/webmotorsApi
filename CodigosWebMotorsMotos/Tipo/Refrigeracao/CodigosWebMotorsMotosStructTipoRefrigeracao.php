<?php
/**
 * File for class CodigosWebMotorsMotosStructTipoRefrigeracao
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
/**
 * This class stands for CodigosWebMotorsMotosStructTipoRefrigeracao originally named TipoRefrigeracao
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://integracao.webmotors.com.br/Motos/wsCodigosWebMotorsMotos.asmx?wsdl}
 * @package CodigosWebMotorsMotos
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-11-03
 */
class CodigosWebMotorsMotosStructTipoRefrigeracao extends CodigosWebMotorsMotosWsdlClass
{
    /**
     * The CodigoTipoRefrigeracao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $CodigoTipoRefrigeracao;
    /**
     * The Descricao
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Descricao;
    /**
     * The CodigoRetorno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CodigoRetorno;
    /**
     * Constructor method for TipoRefrigeracao
     * @see parent::__construct()
     * @param int $_codigoTipoRefrigeracao
     * @param string $_descricao
     * @param string $_codigoRetorno
     * @return CodigosWebMotorsMotosStructTipoRefrigeracao
     */
    public function __construct($_codigoTipoRefrigeracao,$_descricao = NULL,$_codigoRetorno = NULL)
    {
        parent::__construct(array('CodigoTipoRefrigeracao'=>$_codigoTipoRefrigeracao,'Descricao'=>$_descricao,'CodigoRetorno'=>$_codigoRetorno),false);
    }
    /**
     * Get CodigoTipoRefrigeracao value
     * @return int
     */
    public function getCodigoTipoRefrigeracao()
    {
        return $this->CodigoTipoRefrigeracao;
    }
    /**
     * Set CodigoTipoRefrigeracao value
     * @param int $_codigoTipoRefrigeracao the CodigoTipoRefrigeracao
     * @return int
     */
    public function setCodigoTipoRefrigeracao($_codigoTipoRefrigeracao)
    {
        return ($this->CodigoTipoRefrigeracao = $_codigoTipoRefrigeracao);
    }
    /**
     * Get Descricao value
     * @return string|null
     */
    public function getDescricao()
    {
        return $this->Descricao;
    }
    /**
     * Set Descricao value
     * @param string $_descricao the Descricao
     * @return string
     */
    public function setDescricao($_descricao)
    {
        return ($this->Descricao = $_descricao);
    }
    /**
     * Get CodigoRetorno value
     * @return string|null
     */
    public function getCodigoRetorno()
    {
        return $this->CodigoRetorno;
    }
    /**
     * Set CodigoRetorno value
     * @param string $_codigoRetorno the CodigoRetorno
     * @return string
     */
    public function setCodigoRetorno($_codigoRetorno)
    {
        return ($this->CodigoRetorno = $_codigoRetorno);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see CodigosWebMotorsMotosWsdlClass::__set_state()
     * @uses CodigosWebMotorsMotosWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return CodigosWebMotorsMotosStructTipoRefrigeracao
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
