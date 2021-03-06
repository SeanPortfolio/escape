<?php

############################################################################################################################
## New FAQ Item
############################################################################################################################

function new_item()
{
	global $message,$id,$pages_maximum, $do, $htmladmin;

	$now = date("Y-m-d H:i:s");
	
	$temp_array_new['name']               = 'Untitled category';
	$temp_array_new['url']                = $now;
	$temp_array_new['date_created']       = $now;
	$temp_array_new['date_updated']       = $now;
	$temp_array_new['created_by']         = USER_ID;
	$temp_array_new['status']             = 'H';
	$temp_array_new['page_meta_index_id'] = 1;

    $meta_id = insert_row($temp_array_new,'page_meta_data');

    $id = insert_row( array('page_meta_data_id' => $meta_id), 'blog_category' );


    $message = "New item has been added and ready to edit";

    if( $id )
    {
    	header("Location: {$htmladmin}?do={$do}&id={$id}&action=edit");
    	exit();
    }

        
}

?>
