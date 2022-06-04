<?php
   include_once './index.html';
   include_once './php/widgets/webUIwidgets.php';
   $css = array();
   $css[] ='./custom.css';
   $widgets = new BerryPHPWidgets($css);
   $divChild = array();
   $divChild[] = $widgets->Link('https://localhost:3000', 'Go to plugin workspace', null, null, "target='_blank'")
 
   // $widgets->Button('button', 'Hello world', 'btnOne'); 
?>