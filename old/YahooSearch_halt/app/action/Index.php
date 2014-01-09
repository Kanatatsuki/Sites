<?php
/**
 *  Index.php
 *
 *  @author     halt <halt.hde@gmail.com>
 *  @package    Yjs
 *  @version    $Id: app.action.default.php,v 1.9 2004/12/14 07:23:12 fujimoto Exp $
 */

/**
 *  index�ե�����μ���
 *
 *  @author     halt <halt.hde@gmail.com>
 *  @access     public
 *  @package    Yjs
 */
class Yjs_Form_Index extends Ethna_ActionForm
{
    /**
     *  @access private
     *  @var    array   �ե����������
     */
    var $form = array(
        /*
         *  TODO: ���Υ�������󤬻��Ѥ���ե�����������򵭽Ҥ��Ƥ�������
         *
         *  ������(type��������Ƥ����ǤϾ�ά��ǽ)��
         *
         *  'sample' => array(
         *      'name'          => '����ץ�',      // ɽ��̾
         *      'required'      => true,            // ɬ�ܥ��ץ����(true/false)
         *      'min'           => null,            // �Ǿ���
         *      'max'           => null,            // ������
         *      'regexp'        => null,            // ʸ�������(����ɽ��)
         *      'custom'        => null,            // �᥽�åɤˤ������å�
         *      'filter'        => null,            // �������Ѵ��ե��륿���ץ����
         *      'form_type'     => FORM_TYPE_TEXT   // �ե����෿
         *      'type'          => VAR_TYPE_INT,    // �����ͷ�
         *  ),
         */
            'query_string' => array(
                'name'   => 'query',
                'required' => true,
                'form_type' => FORM_TYPE_TEXT,
                'type' => VAR_TYPE_STRING,
                ),
                
            'type' => array(
                'name'   => 'type',
                'required' => true,
                'form_type' => FORM_TYPE_TEXT,
                'type' => VAR_TYPE_STRING,
                ),
    );
}

/**
 *  index���������μ���
 *
 *  @author     halt <halt.hde@gmail.com>
 *  @access     public
 *  @package    Yjs
 */
class Yjs_Action_Index extends Ethna_ActionClass
{
    /**
     *  index����������������
     *
     *  @access public
     *  @return string      Forward��(���ｪλ�ʤ�null)
     */
    function prepare()
    {
        $this->af->setApp('services', $this->Yjs->getServices());
        $this->af->setApp('type', $this->af->get('type'));
        $this->af->setApp('query_string', mb_convert_encoding($this->af->get('query_string'), 'EUC-JP', 'auto'));
        
        if ($this->af->validate() > 0) {
            return 'index';
        }

        return null;
    }

    /**
     *  index���������μ���
     *
     *  @access public
     *  @return string  ����̾
     */
    function perform()
    {
        $result = $this->Yjs->executeQuery($this->af->get('query_string'), $this->af->get('type'));
        $this->af->setApp('matched', $result['totalResultsAvailable']);
        unset($result['totalResultsAvailable']);
        $this->af->setAppNE('result', $result);

        return 'index';
    }

}
?>
