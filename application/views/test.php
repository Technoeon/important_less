<?php
//echo $menu['main_menu_name'];
//print_r($sub_menu);
$sub_menu_id = NULL;
?>

<ul><?php foreach ($main_menu as $value) { ?>
        <li>ID<?php echo $value->id; ?>---Name:<?php echo $value->main_menu_name; ?>
        <?php } ?>
        <ul>
            <?php foreach ($sub_menu as $sub_menu_value) { ?>
                <?php if ($sub_menu_id != $sub_menu_value->sub_menu_id) { ?>
                    <li>
                        <a href="<?php echo $sub_menu_value->sub_menu_id ?>"> <?php echo $sub_menu_value->sub_menu_name;
            $sub_menu_id = $sub_menu_value->sub_menu_id;
                    ?></a>

                        <ul>
                            <?php foreach ($menu as $menu_value) { ?>
            <?php if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) { ?>
                                    <li>

                                        <a href="<?php echo $menu_value->menu_id ?>"> <?php echo $menu_value->menu_name; ?></a>

                                    </li>
                                <?php } ?>
        <?php } ?>
                        </ul>


                    </li>
                <?php } ?>
<?php } ?>
        </ul>
    </li>
</ul>








<?php
//$data = array(1, 2, 2, 2, 2, 3, 4, 4, 4, 4, 5, 6, 7, 8, 8, 9, 9, 9, 9, 9);
//foreach (array_unique($data) as $value) {
//    echo $value . '<br>';
//}

foreach ($main_menu as $value) {
    echo $value->id . '--' . $value->main_menu_name . '<br>';
}
foreach ($sub_menu as $sub_menu_value) {

    if ($sub_menu_id != $sub_menu_value->sub_menu_id) {
        echo $sub_menu_value->sub_menu_id . '--Name:' . $sub_menu_value->sub_menu_name . '<br>';
        $sub_menu_id = $sub_menu_value->sub_menu_id;
        foreach ($menu as $menu_value) {



            if ($menu_value->sub_menu_id == $sub_menu_value->sub_menu_id) {
                echo $menu_value->menu_id . '--Name:' . $menu_value->menu_name . '<br>';
            }
        }
    }
} 


