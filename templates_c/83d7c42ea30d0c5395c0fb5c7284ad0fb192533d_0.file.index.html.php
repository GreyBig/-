<?php
/* Smarty version 3.1.33, created on 2019-03-16 16:36:47
  from 'd:\wwwroot\intloak\wwwroot\smarty\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c8cb59f190ad5_82425953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83d7c42ea30d0c5395c0fb5c7284ad0fb192533d' => 
    array (
      0 => 'd:\\wwwroot\\intloak\\wwwroot\\smarty\\templates\\index.html',
      1 => 1552724085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8cb59f190ad5_82425953 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <title>五行数理</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../app.css">
</head>

<body>
		<main role="main" class="my-auto ">
        <form method="get" action="../search.php" class="text-center">
            <input class="form-control mr-sm-2 col-md-4 offset-md-4" type="text" placeholder="请输入手机号码" name="phonenumber"  >
            <button class="btn btn-outline-info button-search " type="submit">分析号码</button>
          </form>
        <div class="jumbotron">
                    <div class="lead">
                      <p>
                          五行数理说明：<br/>号码<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
的数理为<span class="green">XXX,<br/><?php echo $_smarty_tpl->tpl_vars['datas']->value['forecast_message'];?>
,</span>
                          <br/><span class="small-font">其暗示的信息</span>：
                      </p>
                    </div>
                    <h3 style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['datas']->value['implied_information'];?>
</h3>
                    <p class="small-font">
                      诗云: <?php echo $_smarty_tpl->tpl_vars['datas']->value['poetry_cloud'];?>

                    </p>
                    <!-- 幸运星 -->
                      <?php $_prefixVariable1 = 4;
$_tmp_array = isset($_smarty_tpl->tpl_vars['datas']) ? $_smarty_tpl->tpl_vars['datas']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['lucky_star'] = $_prefixVariable1;
$_smarty_tpl->_assignInScope('datas', $_tmp_array);
if ($_prefixVariable1) {?> 
                          <div>
                              <span class="gray">幸运星：</span>
                              <span class="red">★★★★</span><span class="gray">☆☆☆</span>
                          </div>
                          <div class="fz12">号码价值评估: <span>200.90<span></div>
                      <?php } else {
$_prefixVariable2 = 6;
$_tmp_array = isset($_smarty_tpl->tpl_vars['datas']) ? $_smarty_tpl->tpl_vars['datas']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['lucky_star'] = $_prefixVariable2;
$_smarty_tpl->_assignInScope('datas', $_tmp_array);
if ($_prefixVariable2) {?> 
                          <div>
                              <span class="gray">幸运星：</span>
                              <span class="red">★★★★★★</span><span class="gray">☆</span>
                          </div>
                          <div class="fz12">号码价值评估: <span>¥500.90<span></div>
                      <?php } else {
$_prefixVariable3 = 1;
$_tmp_array = isset($_smarty_tpl->tpl_vars['datas']) ? $_smarty_tpl->tpl_vars['datas']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['lucky_star'] = $_prefixVariable3;
$_smarty_tpl->_assignInScope('datas', $_tmp_array);
if ($_prefixVariable3) {?> 
                          <div>
                              <span class="gray">幸运星：</span>
                              <span class="red">★</span><span class="gray">☆☆☆☆☆☆</span>
                          </div>
                          <div class="fz12">号码价值评估: <span>¥21.90<span></div>
                      <?php }}}?>
                      <div class="fz12">号码<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
的个性系数为<?php echo $_smarty_tpl->tpl_vars['datas']->value['personality_coefficient'];?>
,主人性格类型：
                        <span class="green"><?php echo $_smarty_tpl->tpl_vars['datas']->value['personality_type'];?>
,</span>
                        <br/>具体表现：<?php echo $_smarty_tpl->tpl_vars['datas']->value['performance'];?>

                      </div>
        </div>  
     </main>
</body>
</html><?php }
}
