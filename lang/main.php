<?php

    if(empty($language)) $language = "en";

    $template_lang = "";
    if (file_exists("template/".$template_name."/lang/".$language.".php")) {
        $template_lang = "template/".$template_name."/";
    } else {
        $template_lang =  "";
    }
    
    
       switch($language) {
        
                case "en":
                       include ($template_lang."lang/en.php");
                        break;
                default:
                       include ($template_lang."lang/en.php");
                        break;
        }
