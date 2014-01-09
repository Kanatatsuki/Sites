<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=EUC-JP">
        <style type="text/css">
        {literal}
        <!--
        body {
            background-color: #ffffff;
            color: #000000;
            font-family: Arial,Verdana,Helvetica,'MS UI Gothic',sans-serif;
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
        {/literal}
        </style>
    </head>
    <body>
        <h1>Yahoo Japan Proxy</h1>
<form method=GET action="{$script}">
<input type="hidden" name="action_index" value="1">

<select name="type">
{foreach from=$app.services key=key item=current}
<option value="{$key}" {if $key == $app.type}selected{/if}>{$key}</option>
{/foreach}
</select>

<input type="text" name="query_string" value="{$app.query_string}"><input type="submit" value="送信">
</form>
<hr>
{if $app.query_string}
{$app.query_string}の検索結果 全{$app.matched}件<br>
{foreach from=$app_ne.result key=key item=current}

{if $app.type eq 'web'}
<a href="{$current.Url}">{$current.Title}</a><br>
  {if $current.Cache}
    {$current.Cache}<br>
  {/if}
{elseif $app.type eq 'image'}
  {$current.Title}<br>
  {if $current.Thumbnail}
      <a href="{$current.ClickUrl}" noborder>{$current.Thumbnail}</a><br>
        元：<a href="{$current.RefererUrl}">{$current.Summary}</a><br>
  {/if}
{elseif $app.type eq 'video'}
  {$current.Title}<br>
  {if $current.Thumbnail}
      <a href="{$current.ClickUrl}" noborder>{$current.Thumbnail}</a><br>
        元：<a href="{$current.RefererUrl}">{$current.Summary}</a><br>
  {/if}
{/if}

<hr>
{/foreach}
{/if}
    </body>

</html>
