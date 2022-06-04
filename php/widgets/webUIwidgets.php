<?php
    
    class BerryPHPWidgets{
        function __construct($csslinks = array())
        {
            echo"<link rel='stylesheet' href='./css/all.css' class='css'>";
            echo"<link rel='stylesheet' href='./css/main.css' class='css'>";
            echo"<link rel='stylesheet' href='./css/colors.css' class='css'>";
            echo"<link rel='stylesheet' href='./css/webui.css' class='css'>";

            for($links = 0; $links < count($csslinks); $links++){
                echo"<link rel='stylesheet' href='{$csslinks[$links]}' class='css'>";
            }
        }
        function Link($link, $text, $className = 'defaultLink', $id = null, $flag = null,  $style=null){
            echo "<a href='{$link}' class='{$className}' {$style} {$flag}>{$text}</a>";
        } 
        function Textview($className='defaultTextview', $child, $id = null, $flag = null, $style=null){
            echo "<span class='{$className}' {$style} {$flag}>{$child}</span>";
        }
        function Button($type, $text, $className='defaultButton', $id = null, $flag = null, $style=null){
            echo "<button type='{$type}' class='{$className}' {$style} {$flag}>{$text}</button>";
        }
        function Input($type, $value, $className='defaultInputContainer', $placeholder="Enter your value", $id = null, $flag = null, $style=null){
            echo "<input type='{$type}' class='{$className}' value={$value} {$style} {$flag} {$placeholder}>";
        }
        function Div($child, $className='defaultdivContainer',  $id = null, $flag = null, $style=null){
            echo "<div class='{$className}' {$style} {$flag}>";
                // for ($i=0; $i < strlen($child); $i++) { 
                //    echo $child[$i];
                // }
                echo $child;
            echo"</div>";
        }
    }

?>