<?php
// vim: foldmethod=marker
/**
 *	generate_action_script.php
 *
 *	@author		yourname
 *	@package	Yjs
 *	@version	$Id: bin.generate_action_script.php,v 1.1 2004/12/01 06:03:59 fujimoto Exp $
 */
chdir(dirname(__FILE__));
include_once('../app/Yjs_Controller.php');

ini_set('max_execution_time', 0);

// {{{ Yjs_Action_CliGenerateActionScript
class Yjs_Action_CliGenerateActionScript extends Ethna_CLI_ActionClass
{
	/**
	 *	cli_generate_action_script���������μ¹�
	 *
	 *	@access	public
	 */
	function perform()
	{
		parent::perform();

		if (count($_SERVER['argv']) != 2) {
			return $this->_usage();
		}

		$action_name = $_SERVER['argv'][1];

		printf("generating action script for [%s]...\n", $action_name);

		$sg = new Ethna_SkeltonGenerator();
		$sg->generateActionSkelton($action_name);
	}

	/**
	 *	usage��ɽ������
	 *
	 *	@access	private
	 */
	function _usage()
	{
		printf("%s [action name]\n", $_SERVER['argv'][0]);
	}
}
// }}}

Yjs_Controller::main_CLI('Yjs_Controller', 'cli_generate_action_script');
?>
