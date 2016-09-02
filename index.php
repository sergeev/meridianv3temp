<?php
    defined('_JEXEC') or die;
    $app = JFactory::getApplication();
    $doc = JFactory::getDocument();
    $menu = $app->getMenu();
    $lang = JFactory::getLanguage();

    $template_url = $this->baseurl . '/templates/' . $this->template;
    $doc->addStyleSheet($template_url . '/css/template.css');
    $doc->addStyleSheet('http://fonts.googleapis.com/css?family=Oswald:400,300');

    $is_home_page = $menu->getActive() == $menu->getDefault($lang->getTag());
?>

<!doctype html>
<html>
<head>
    <jdoc:include type="head"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <header></header>
    <nav class="main-navigation"></nav>
    <div class="main-heading"></div>
    <jdoc:include type="message"/>
    <jdoc:include type="component"/>
</div>
<footer></footer>
</body>
</html>