<?php 
$idx_menu=1;
$class_li = '';
$attr_li = '';
$class_A = '';
$attr_A = '';
$class_li_sub=''; 
$attr_li_sub=''; 
$class_A_sub=''; 
$attr_A_sub='';
$icon_A_sub = ' <span>+</span>';
$html_A_before = '';
$html_A_after = '';
$class_li_ul = 'submenu';
$attr_li_ul = '';
$class_li_ul_li = '';
$attr_li_ul_li = '';
$class_li_ul_li_a = '';
$attr_li_ul_li_a = '';
$html_li_ul_li_a_before = '';
$html_li_ul_li_a_after = '';
$fCMS->obtener_menu($idx_menu, $class_li, $attr_li, $class_A, $attr_A, $class_li_sub, $attr_li_sub, $class_A_sub, $attr_A_sub, $icon_A_sub, $html_A_before, $html_A_after, $class_li_ul, $attr_li_ul, $class_li_ul_li, $attr_li_ul_li, $class_li_ul_li_a, $attr_li_ul_li_a, $html_li_ul_li_a_before, $html_li_ul_li_a_after);
?>