<?php
if (!defined('__TYPECHO_ADMIN__')) {
    exit;
}

$header = '<link rel="stylesheet" href="' . Typecho_Common::url('normalize.css?v=' . $suffixVersion, $options->adminStaticUrl('css')) . '">
<link rel="stylesheet" href="' . Typecho_Common::url('grid.css?v=' . $suffixVersion, $options->adminStaticUrl('css')) . '">
<link rel="stylesheet" href="' . Typecho_Common::url('style.css?v=' . $suffixVersion, $options->adminStaticUrl('css')) . '">
<!--[if lt IE 9]>
<script src="' . Typecho_Common::url('html5shiv.js?v=' . $suffixVersion, $options->adminStaticUrl('js')) . '"></script>
<script src="' . Typecho_Common::url('respond.js?v=' . $suffixVersion, $options->adminStaticUrl('js')) . '"></script>
<![endif]-->';

/** 注册一个初始化插件 */
$header = Typecho_Plugin::factory('admin/header.php')->header($header);

?><!DOCTYPE HTML>
<html class="no-js" data-color-mode="<?php if($_COOKIE['night']=='1')echo 'dark';else echo 'light'; ?>">
<head>
    <meta charset="<?php $options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php _e('%s - %s - Powered by Typecho', $menu->title, $options->title); ?></title>
    <meta name="robots" content="noindex, nofollow">
    <?php echo $header; ?>
</head>
<body<?php if (isset($bodyClass)) {echo ' class="' . $bodyClass . '"';} ?>>
<!--[if lt IE 9]>
        <div class="message error browsehappy" role="dialog"><?php _e('你的浏览器已不被支持，推荐更新或使用Chrome或Edge等浏览器。'); ?>.</div>
    <![endif]-->
