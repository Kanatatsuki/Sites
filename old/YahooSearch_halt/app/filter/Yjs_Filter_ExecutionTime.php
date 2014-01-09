<?php
/**
 *	Yjs_Filter_ExecutionTime.php
 *
 *	@author		your name
 *	@package	Yjs
 *	@version	$Id: app.filter.default.php,v 1.3 2005/01/04 12:50:42 fujimoto Exp $
 */

/**
 *	�¹Ի��ַ�¬�ե��륿�μ���
 *
 *	@author		your name
 *	@access		public
 *	@package	Yjs
 */
class Yjs_Filter_ExecutionTime extends Ethna_Filter
{
	/**#@+
	 *	@access	private
	 */

	/**
	 *	@var	int		���ϻ���
	 */
	var	$stime;

	/**#@-*/


	/**
	 *	�¹����ե��륿
	 *
	 *	@access	public
	 */
	function preFilter()
	{
		$stime = explode(' ', microtime());
		$stime = $stime[1] + $stime[0];
		$this->stime = $stime;
	}

	/**
	 *	�¹Ը�ե��륿
	 *
	 *	@access	public
	 */
	function postFilter()
	{
		$etime = explode(' ', microtime());
		$etime = $etime[1] + $etime[0];
		$time   = round(($etime - $this->stime), 4);

		print "\n<!-- page was processed in $time seconds -->\n";
	}
}
?>
