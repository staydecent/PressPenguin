<?php

	/* Functions for processing custom fields */

	function get_custom_field($field, $format = '', $date_format = 'F j, Y')
	{
		$fetch = $field;
		$fetch = get_post_custom_values($field);
		$fetch = $fetch[0];

		// Date
		if ($format == 'date' & $fetch !='') $fetch = format_date($fetch, $date_format);
			
		// Text Block
		elseif ($format == 'text_block') $fetch = wpautop($fetch);

		// Link
		elseif ($format == 'link') $fetch = '<a href="'.$fetch.'" class="custom_link">'.$fetch.'</a>';

		// HTML
		elseif ($format == 'html') $fetch = html_entity_decode($fetch);
			
		// Google Map
		elseif ($format == 'google_map') $fetch = display_google_map($fetch);
	

		return $fetch;
	}

	function custom_field($field, $format = '', $date_format = 'F j, Y')
	{
		echo get_custom_field($field, $format, $date_format);
	}

	function format_date($date, $date_format)
	{
		$date = date($date_format, $date);
		return $date;
	}

	function display_google_map($code)
	{
		$code = html_entity_decode($code);
		// Remove the info bubble. Usually desirable, but use the html format if unwanted.
		$code = str_replace("output=embed", "output=embed&iwloc=near", $code);
		return $code;
	}

?>