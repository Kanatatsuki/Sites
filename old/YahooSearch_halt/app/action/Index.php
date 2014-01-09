<?php
/**
 *  Index.php
 *
 *  @author     halt <halt.hde@gmail.com>
 *  @package    Yjs
 *  @version    $Id: app.action.default.php,v 1.9 2004/12/14 07:23:12 fujimoto Exp $
 */

/**
 *  indexフォームの実装
 *
 *  @author     halt <halt.hde@gmail.com>
 *  @access     public
 *  @package    Yjs
 */
class Yjs_Form_Index extends Ethna_ActionForm
{
    /**
     *  @access private
     *  @var    array   フォーム値定義
     */
    var $form = array(
        /*
         *  TODO: このアクションが使用するフォーム値定義を記述してください
         *
         *  記述例(typeを除く全ての要素は省略可能)：
         *
         *  'sample' => array(
         *      'name'          => 'サンプル',      // 表示名
         *      'required'      => true,            // 必須オプション(true/false)
         *      'min'           => null,            // 最小値
         *      'max'           => null,            // 最大値
         *      'regexp'        => null,            // 文字種指定(正規表現)
         *      'custom'        => null,            // メソッドによるチェック
         *      'filter'        => null,            // 入力値変換フィルタオプション
         *      'form_type'     => FORM_TYPE_TEXT   // フォーム型
         *      'type'          => VAR_TYPE_INT,    // 入力値型
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
 *  indexアクションの実装
 *
 *  @author     halt <halt.hde@gmail.com>
 *  @access     public
 *  @package    Yjs
 */
class Yjs_Action_Index extends Ethna_ActionClass
{
    /**
     *  indexアクションの前処理
     *
     *  @access public
     *  @return string      Forward先(正常終了ならnull)
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
     *  indexアクションの実装
     *
     *  @access public
     *  @return string  遷移名
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
