<?php /* Smarty version 2.6.6, created on 2005-12-27 19:58:59
         compiled from index.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=EUC-JP">
        <style type="text/css">
        <?php echo '
        <!--
        body {
            background-color: #ffffff;
            color: #000000;
            font-family: Arial,Verdana,Helvetica,\'MS UI Gothic\',sans-serif;
            margin-left: 50px;
            margin-right: 50px;
        }

        h1 {
            font-weight: bold;
            text-align: left;
        }

        div.block{
            margin-left: 1em;
            margin-bottom: 1em;
        }

        h2 {
            border-top: 1px solid #cccccc;
            border-right: 1px solid #cccccc;
            border-bottom: 1px solid #cccccc;
            border-left: 10px solid #0055bb;
            padding:6px;
            font-size: 1.2em;
        }
        --> 
        '; ?>

        </style>
    </head>
    <body>
        <h1>Yahoo Japan Proxy</h1>
<form method=GET action="<?php echo $this->_tpl_vars['script']; ?>
">
<input type="hidden" name="action_index" value="1">

<select name="type">
<?php if (count($_from = (array)$this->_tpl_vars['app']['services'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['current']):
?>
<option value="<?php echo $this->_tpl_vars['key']; ?>
" <?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['app']['type']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['key']; ?>
</option>
<?php endforeach; unset($_from); endif; ?>
</select>

<input type="text" name="query_string" value="<?php echo $this->_tpl_vars['app']['query_string']; ?>
"><input type="submit" value="送信">
</form>
<hr>
<?php if ($this->_tpl_vars['app']['query_string']):  echo $this->_tpl_vars['app']['query_string']; ?>
の検索結果 全<?php echo $this->_tpl_vars['app']['matched']; ?>
件<br>
<?php if (count($_from = (array)$this->_tpl_vars['app_ne']['result'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['current']):
?>

<?php if ($this->_tpl_vars['app']['type'] == 'web'): ?>
<a href="<?php echo $this->_tpl_vars['current']['Url']; ?>
"><?php echo $this->_tpl_vars['current']['Title']; ?>
</a><br>
  <?php if ($this->_tpl_vars['current']['Cache']): ?>
    <?php echo $this->_tpl_vars['current']['Cache']; ?>
<br>
  <?php endif;  elseif ($this->_tpl_vars['app']['type'] == 'image'): ?>
  <?php echo $this->_tpl_vars['current']['Title']; ?>
<br>
  <?php if ($this->_tpl_vars['current']['Thumbnail']): ?>
      <a href="<?php echo $this->_tpl_vars['current']['ClickUrl']; ?>
" noborder><?php echo $this->_tpl_vars['current']['Thumbnail']; ?>
</a><br>
        元：<a href="<?php echo $this->_tpl_vars['current']['RefererUrl']; ?>
"><?php echo $this->_tpl_vars['current']['Summary']; ?>
</a><br>
  <?php endif;  elseif ($this->_tpl_vars['app']['type'] == 'video'): ?>
  <?php echo $this->_tpl_vars['current']['Title']; ?>
<br>
  <?php if ($this->_tpl_vars['current']['Thumbnail']): ?>
      <a href="<?php echo $this->_tpl_vars['current']['ClickUrl']; ?>
" noborder><?php echo $this->_tpl_vars['current']['Thumbnail']; ?>
</a><br>
        元：<a href="<?php echo $this->_tpl_vars['current']['RefererUrl']; ?>
"><?php echo $this->_tpl_vars['current']['Summary']; ?>
</a><br>
  <?php endif;  endif; ?>

<hr>
<?php endforeach; unset($_from); endif;  endif; ?>
    </body>

</html>