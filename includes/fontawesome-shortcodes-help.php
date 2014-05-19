<?php

// We need a function that can add ids to HTML header tags
function fa_retitle($match) {
    list($_unused, $h3, $title) = $match;

    $id = "fa-" . strtolower(strtr($title, " .", "--"));

    return "<$h3 id='$id'>$title</$h3>";
}
//$thisfile = realpath(dirname(__FILE__));
# Install PSR-0-compatible class autoloader
//spl_autoload_register(function($class){
//    require 'php_markdown/' . preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
//});

$html = file_get_contents(dirname(__FILE__) . '/help/README.html');
?>

<script>
    jQuery(document).ready(function() {
        jQuery("#selector .icon-lists a").click(function() {
            var icon = jQuery( "i", this ).attr('class').replace('fa fa-', '');
            var sendto = "[fa type=\"" + icon + "\"]";
            var win = window.dialogArguments || opener || parent || top;
            win.send_to_editor(sendto);
            return false;
        });
        
        jQuery(".fa-insert-code").click(function() {
            var example = jQuery( this ).parent().prev().find("code").text();
            var lines = example.split('\n');
            var paras = '';
            jQuery.each(lines, function(i, line) {
                if (line) {
                    paras += line + '<br>';
                }
            });
            var win = window.dialogArguments || opener || parent || top;
            win.send_to_editor(paras);
        });


    });
</script>
<script type="text/javascript">
    jQuery( '.font-awesome-shortcodes-button' ).each( function( index, value ) {
    var h = window.innerHeight * .85;
    var href = jQuery( this ).attr('href');
    var find = 'height=650';
    var replace = '&height='+h;
    href = href.replace( find, replace )
    jQuery( this ).attr( 'href', href );
    } );
</script>

<div style="display:none;" id="fontawesome-shortcodes-help-popup">
    <div id="fontawesome-shortcodes-help">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#selector" data-toggle="tab">Icon Selector</a></li>
            <li><a href="#documentation" data-toggle="tab">Plugin Documentation</a></li>
        </ul>
        <div class="tab-content">
      <div class="tab-pane active" id="selector">
          
              <p class="alert alert-warning" style="margin-top: 20px;">Click an icon to automatically insert it into the WordPress editor.</p>
            <div class="list-group">
                <a class="list-group-item" href="#new">New Icons in 4.1</a>
                <a class="list-group-item" href="#web-application">Web Application Icons</a>
                <a class="list-group-item" href="#file-type">File Type Icons</a>
                <a class="list-group-item" href="#spinner">Spinner Icons</a>
                <a class="list-group-item" href="#form-control">Form Control Icons</a>
                <a class="list-group-item" href="#currency">Currency Icons</a>
                <a class="list-group-item" href="#text-editor">Text Editor Icons</a>
                <a class="list-group-item" href="#directional">Directional Icons</a>
                <a class="list-group-item" href="#video-player">Video Player Icons</a>
                <a class="list-group-item" href="#brand">Brand Icons</a>
                <a class="list-group-item" href="#medical">Medical Icons</a>
            </div>
            <div class="icon-lists">
                <?php include(dirname(__FILE__) . '/help/icon-list.html') ?>
            </div>    
                
            </div>  
            
            <div class="tab-pane" id="documentation">
            <?php
                # Put HTML content in the document
                $html = preg_replace('/(<a href="http:[^"]+")>/is','\\1 target="_blank">',$html);
                $html = str_replace('<table>', '<table class="table table-striped">', $html);
                $html = str_replace('<ul>', '<div class="list-group">', $html);
                $html = str_replace('</ul>', '</div>', $html);
                $html = str_replace('<li><a ', '<a class="list-group-item" ', $html);
                $html = str_replace('</li>', '', $html);
                $html = str_replace('href="#', 'href="#fa-', $html);
                $html = preg_replace_callback("#<(h[1-6])>(.*?)</\\1>#", "fa_retitle", $html);
                $html = str_replace('</pre>', '</pre><p><button class="btn btn-primary btn-sm fa-insert-code">Insert Example <i class="glyphicon glyphicon-share-alt"></i></button></p>', $html);
                echo $html;
            ?>
            </div>
        </div>
            
</div>
</div>
