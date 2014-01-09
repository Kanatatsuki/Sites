<?php /* Smarty version 2.6.26, created on 2013-09-22 17:40:16
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'index.tpl', 22, false),array('function', 'form_input', 'index.tpl', 23, false),array('function', 'form_submit', 'index.tpl', 25, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']['url']; ?>
css/ethna.css" type="text/css" />
</head>
<body>

<div id="header">
    <h1>Bootcamp8 - Yanong Li</h1>
</div>

<div id="main">
    <h2>Index Page</h2>
    <p>hello, world!</p>
    
    
       <p>Please Input the PDF Url, Errors will Shown on top</p>
    <?php $this->_tag_stack[] = array('form', array('name' => 'form_pdfurl','ethna_action' => 'openpdf')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php echo smarty_function_form_input(array('name' => 'pdfurl'), $this);?>

    <br />
    <?php echo smarty_function_form_submit(array(), $this);?>

    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 
</div>

<div id="footer">
    Powered By <a href="http://ethna.jp">Ethna</a>-<?php echo @ETHNA_VERSION; ?>
.
</div>

</body>
</html>