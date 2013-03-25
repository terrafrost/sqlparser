<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<title>EasyMOD :: SQL Parser</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="author" content="phpBB MOD Team" />
<meta name="classification" content="Computers,Software,Databases,MySQL,PostgreSQL,Microsoft SQL Server,SQL,Applications,PHP,Open Source" />
<meta name="copyright" content="Copyright (c) 2005, phpBB Group" />
<meta name="description" content="SQL Data Definition Language (DDL) Conversion to MySQL, PostgreSQL and MS-SQL" />
<meta name="keywords" content="phpbb,easymod,sql,ddl,parser,conversion,migration,mysql,postgresql,mssql,sql server,php,opensource" />
<meta name="rating" content="general" />
<meta name="revisit-after" content="15 days" />
<meta name="robots" content="index,follow" />
<link rel="stylesheet" href="templates/subSilver/subSilver.css" type="text/css">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19770173-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body bgcolor="#E5E5E5" text="#000000" link="#006699" vlink="#5493B4">

<a href="https://github.com/terrafrost/sqlparser"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub"></a>

<a name="top" id="top"></a>
<table width="100%" cellspacing="0" cellpadding="10" border="0" align="center">
	<tr>
		<td class="bodyline">
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td align="left" valign="middle">
						<span class="mainmenu"><a href="" class="mainmenu"><img src="templates/subSilver/images/logo_phpBB.gif" border="0" alt="EasyMOD :: SQL Parser" title="EasyMOD :: SQL Parser" /></a></span>
					</td>
					<td align="right" valign="middle" width="100%">
						<table width="100%" cellspacing="0" cellpadding="4" border="0">
							<tr>
								<td align="center"><span class="maintitle">EasyMOD :: SQL Parser</span></td>
							</tr>
							<tr>
								<td align="center"><span class="genmed">SQL Data Definition Language (DDL) Conversion to MySQL, PostgreSQL and MS-SQL</span></td>
							</tr>
							<tr>
								<td align="center"><img src="templates/subSilver/images/spacer.gif" border="0" alt="" /></td>
							</tr>
							<tr>
								<td align="center">
									<div class="gensmall">
										|
										<a href="http://area51.phpbb.com/phpBB/viewtopic.php?t=20911" target="_blank" class="mainmenu">Syntax Reference</a>
										|
										<a href="http://area51.phpbb.com/phpBB/viewforum.php?f=43" target="_blank" class="mainmenu">Support Forum</a>
										|
										<a href="http://sourceforge.net/projects/easymod/" target="_blank" class="mainmenu">SF.net Project</a>
										|
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<img src="templates/subSilver/images/spacer.gif" border="0" height="10" alt="" />
					</td>
				</tr>
			</table>

<form name="sql_tools" method="post" action="">
<table cellpadding="0" cellspacing="0" border="0" class="forumline" width="100%">
	<tr>
		<th>SQL Data Definition Language (DDL) Conversion to MySQL, PostgreSQL and MS-SQL</th>
	</tr>
	<tr>
		<td class="row1">
			<table cellpadding="8" cellspacing="0" border="0" width="100%">
				<tr>
					<td align="left"><?php if (!isset($_POST['next'])): ?><div class="gen" style="text-align:center;">
<b>Welcome to the SQL Parser for EasyMOD online conversion tool!</b></div>
<br clear="all" />
<div class="genmed">These panels allow you to convert <a class="genmed" href="http://www.wikipedia.org/wiki/Sql" target="_blank">SQL</a>/<a class="genmed" href="http://www.wikipedia.org/wiki/Data_Definition_Language" target="_blank">DDL</a> statements to <a class="genmed" href="http://dev.mysql.com/doc/mysql/en/index.html" target="_blank">MySQL</a>, <a class="genmed" href="http://www.postgresql.org/docs/manuals/" target="_blank">PostgreSQL</a> or <a class="genmed" href="http://msdn.microsoft.com/library/en-us/dnanchor/html/sqlserver2000.asp" target="_blank">MS-SQL</a>.
It is based on the <a class="genmed" href="http://area51.phpbb.com/phpBB/viewforum.php?f=43" target="_blank">SQL Parser</a> for <a class="genmed" href="http://area51.phpbb.com/phpBB/viewforum.php?f=15" target="_blank">EasyMOD</a>.
The main goal of the SQL Parser is provide support for as much options as possible making sure all those options are portable between
the different SQL servers supported by the <a class="genmed" href="http://www.phpbb.com/" target="_blank">phpBB</a> Database Abstraction Layer (DBAL).
<br /><br />
The <a class="genmed" href="http://area51.phpbb.com/phpBB/viewtopic.php?t=20911" target="_blank">SQL Parser understands</a> almost all options present in the MySQL syntax for the supported DDL actions,
however it will issue warnings (or errors) when unsupported or non-portable features are detected,
it also performs several checks to verify the consistency of the DB design.
When warnings (or errors) are issued, it is recommended to adapt the original DDL to make it as portable as possible.
<br /><br />
Currently, CREATE TABLE, DROP TABLE and ALTER TABLE are converted to a set of equivalent statements compatible with the selected SQL server.
INSERT, UPDATE and DELETE statements are also accepted since they can be required when installing MODs to make DB changes,
however these statements are basically compatible between all SQL servers, therefore they are left as-is,
any other SQL command such as SELECT is unrecognized here.
<br /><br />
This online tool is implemented as a wizard.
The following panel contains a form where you can select the target SQL server and enter your SQL/DDL statements.
The next panel will show you a report of the conversion process.
This report may contain an error message (if the conversion process failed), or a list of warnings followed by all SQL statements generated.
Ideally, you shouldn't get any warning. If that happens, it is recommended to adapt your SQL statements and re-try.
<br /><br />
Feel free to use the <a class="genmed" href="http://area51.phpbb.com/phpBB/viewforum.php?f=43" target="_blank">support forum</a> to post your comments or report any issues you may find using this tool.
Your experience converting SQL schemas and, specially using non-MySQL servers is more than welcome.
<br /><br />
Thanks for your collaboration,
<br />
<a class="genmed" href="http://www.phpbb.com/about.php" target="_blank">The phpBB MOD Team</a></div><?php elseif (isset($_POST['sql'])):

// ensure consistency of input, regardless of magic_quotes_gpc directive
function array_stripslashes($arr)
{
	foreach ($arr as $key=>$value)
	{
		$arr[$key] = is_array($value) ? array_stripslashes($value) : stripslashes($value);		
	}

	return $arr;
}

if ( get_magic_quotes_gpc() )
{
	$_POST = array_stripslashes($_POST);
	$_GET = array_stripslashes($_GET);
	$_COOKIE = array_stripslashes($_COOKIE);
}

echo '<div class="gen" style="margin: 0 auto; width: 700px">';

$phpEx = 'php';
$lang = array();
include('lang/lang_sql_parser.php');
include('sql/sql_parser.php');

// valid names = mysql, postgresql, mssql
$sql_parser = new sql_parser('sql/', $_POST['dbms']);

$result = $sql_parser->parse_stream($_POST['sql']);

if( $result & SQL_PARSER_ERROR )
{
	$showsql = true;
	echo '<b style="color: red">Error</b>:<br />' . htmlspecialchars($sql_parser->error_message['message']);
	echo '<textarea style="width: 700px; height: 500px" name="sql">' . htmlspecialchars($_POST['sql']) . '</textarea>';
}
else
{
	$skipnext = true;
	if( $result & SQL_PARSER_WARNINGS )
	{
		echo '<b style="color: orange">Warning(s)</b>:';
		foreach ($sql_parser->warnings as $warning)
		{
			echo '<br />' . $warning['message'];
		}
	}

	echo '<textarea style="width: 700px; height: 500px" name="sql">' . implode(";\r\n", $sql_parser->sql_output) . ';</textarea>';
}

echo '</div>';
else:
$showsql = true; ?>
<div class="gen" style="text-align:center;"><textarea style="width: 700px; height: 500px" name="sql"></textarea></div>
<?php endif; ?>
</td>
				</tr>
			</table>
		</td>
	</tr>
<?php if (!isset($skipnext)): ?>
	<tr>
		<td class="catBottom" align="center">
<?php if (isset($showsql)): ?>
			&nbsp;
			<select class="post" name="dbms" class="liteoption">
				<option value="mysql" <?php if (isset($_POST['dbms']) && $_POST['dbms'] == 'mysql') echo 'selected="selected"'; ?>>MySQL</option>
				<option value="postgresql" <?php if (isset($_POST['dbms']) && $_POST['dbms'] == 'postgresql') echo 'selected="selected"'; ?>>PostgreSQL</option>
				<option value="mssql" <?php if (isset($_POST['dbms']) && $_POST['dbms'] == 'mssql') echo 'selected="selected"'; ?>>MSSQL</option>
			</select>
			&nbsp;
<?php endif; ?>
			&nbsp;<input class="post" type="submit" name="next" class="liteoption" value="&nbsp;&#0187;&#0187;&#0187;&nbsp;" title="Next" />&nbsp;
		</td>
	</tr>
<?php endif; ?>
</table>
<input type="hidden" name="page" value="welcome" />
</form>

<br clear="all" />
<div class="copyright" style="text-align:center;">
Copyright &copy; phpBB Group, 2005, All Rights Reserved
<br />
<a class="copyright" target="_blank" href="http://www.phpbb.com/">phpBB</a>,
<a class="copyright" target="_blank" href="http://area51.phpbb.com/phpBB/viewforum.php?f=17">EasyMOD</a> and the
<a class="copyright" target="_blank" href="http://area51.phpbb.com/phpBB/viewforum.php?f=43">SQL Parser</a> are released under the
<a class="copyright" target="_blank" href="http://opensource.org/licenses/gpl-license.php">GPL</a>
</div>
		</td>
	</tr>
</table>

</body>
</html>
