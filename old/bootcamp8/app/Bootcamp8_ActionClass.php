<?php
// vim: foldmethod=marker
/**
 *  Bootcamp8_ActionClass.php
 *
 *  @author     {$author}
 *  @package    Bootcamp8
 *  @version    $Id$
 */

// {{{ Bootcamp8_ActionClass
/**
 *  action execution class
 *
 *  @author     {$author}
 *  @package    Bootcamp8
 *  @access     public
 */
class Bootcamp8_ActionClass extends Ethna_ActionClass
{
    /**
     *  authenticate before executing action.
     *
     *  @access public
     *  @return string  Forward name.
     *                  (null if no errors. false if we have something wrong.)
     */
    function authenticate()
    {
        return parent::authenticate();
    }

    /**
     *  Preparation for executing action. (Form input check, etc.)
     *
     *  @access public
     *  @return string  Forward name.
     *                  (null if no errors. false if we have something wrong.)
     */
    function prepare()
    {
        return parent::prepare();
    }

    /**
     *  execute action.
     *
     *  @access public
     *  @return string  Forward name.
     *                  (we does not forward if returns null.)
     */
    function perform()
    {
        return parent::perform();
    }
}
// }}}

?>
