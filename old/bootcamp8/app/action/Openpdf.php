<?php
/**
 *  Openpdf.php
 *
 *  @author     {$author}
 *  @package    Bootcamp8
 *  @version    $Id$
 */

/**
 *  openpdf Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Bootcamp8
 */
class Bootcamp8_Form_Openpdf extends Bootcamp8_ActionForm
{
    /**
     *  @access private
     *  @var    array   form definition.
     */
    var $form = array(
         'pdfurl' => array(
            'type' => VAR_TYPE_STRING,
            'form_type' => FORM_TYPE_TEXTAREA,
            'name' => 'pdfurl',
            'max' => 256,
            'required' => true,
        ),
       /*
        *  TODO: Write form definition which this action uses.
        *  @see http://ethna.jp/ethna-document-dev_guide-form.html
        *
        *  Example(You can omit all elements except for "type" one) :
        *
        *  'sample' => array(
        *      // Form definition
        *      'type'        => VAR_TYPE_INT,    // Input type
        *      'form_type'   => FORM_TYPE_TEXT,  // Form type
        *      'name'        => 'Sample',        // Display name
        *  
        *      //  Validator (executes Validator by written order.)
        *      'required'    => true,            // Required Option(true/false)
        *      'min'         => null,            // Minimum value
        *      'max'         => null,            // Maximum value
        *      'regexp'      => null,            // String by Regexp
        *      'mbregexp'    => null,            // Multibype string by Regexp
        *      'mbregexp_encoding' => 'UTF-8',   // Matching encoding when using mbregexp 
        *
        *      //  Filter
        *      'filter'      => 'sample',        // Optional Input filter to convert input
        *      'custom'      => null,            // Optional method name which
        *                                        // is defined in this(parent) class.
        *  ),
        */
    );

    /**
     *  Form input value convert filter : sample
     *
     *  @access protected
     *  @param  mixed   $value  Form Input Value
     *  @return mixed           Converted result.
     */
    /*
    function _filter_sample($value)
    {
        //  convert to upper case.
        return strtoupper($value);
    }
    */
}

/**
 *  openpdf action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Bootcamp8
 */
class Bootcamp8_Action_Openpdf extends Bootcamp8_ActionClass
{
    /**
     *  preprocess of openpdf Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */    
    function prepare()
    {
            //  test the the validity of the URL
        if ($this->af->validate() > 0) {
            Ethna::raiseError("Invalid URL");
            return 'index';
        }
        
        if( substr($this->af->form_vars['pdfurl'],0,5) == "http:" ){
            $array = get_headers($this->af->form_vars['pdfurl'],1);
        }
        else{
            $array = get_headers('http://'.$this->af->form_vars['pdfurl'],1); 
        }
        if( !(preg_match('/200/',$array[0])) ){
            Ethna::raiseError("Invalid URL");
            return 'index';
        }
        
        if( !(substr($this->af->form_vars['pdfurl'],-3,3) == "pdf") ){
            Ethna::raiseError("Invalid FileType");
            return 'index';
        }
    
        return null;
    }

    /**
     *  openpdf action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    function perform()
    {
        if( substr($this->af->form_vars['pdfurl'],0,5) == "http:" ){
            $this->af->setApp('pdfurl',$this->af->form_vars['pdfurl']);
        }
        else{
             $this->af->setApp('pdfurl','http://'.$this->af->form_vars['pdfurl']);
        }
        return 'openpdf';
    }
}

?>
