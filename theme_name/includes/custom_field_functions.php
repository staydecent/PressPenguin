<?php

	/* Functions for processing custom fields */
	// just semantics, but is more clear.	
	function format_custom_field($field, $format = '', $date_format = 'F j, Y')
	{
		// No need to declar the var here, it's created below		
		// $fetch = $field;
		$fetch = get_post_custom_values($field);
		$fetch = $fetch[0];
		
		// Test if anything was fetched or return false. Should test using empty()
		if (!$fetch) {
			return false;	
		}
		
		// switches make more sense for testing the same variable multiple times
		// also, as you're not running any other checks on the $fetch var, why
		// not return the value right away?		
		switch ($format) {
			case 'date':
				return date($date_format, $fetch);
				break;
			case 'text_block':
				return wpautop($fetch);
				break;
			case 'link':
				return '<a href="'.$fetch.'" class="custom_link">'.$fetch.'</a>';
				break;
			case 'html':
				return html_entity_decode($fetch);
				break;
			case 'google_map':
				return display_google_map($fetch);
				break;
			default:
				// If you're not processing(formatting) the var at all
				// why even use this function? Just use the WP custom field funcs.
				return $fetch;
				
		}
	}

	// Get and echo custom field data
	// Preference I suppose, but feels like cluttering the function namespace.
	function custom_field($field, $format = '', $date_format = 'F j, Y')
	{
		echo format_custom_field($field, $format, $date_format);
	}

	
	// Formatting for dates
	// Why? This is a rare case where PHP's param ordering makes sense.
	function format_date($date, $date_format)
	{
		$date = date($date_format, $date);
		return $date;
	}

	
	// Formatting for Google Maps
	function display_google_map($code)
	{
		$code = html_entity_decode($code);
		// Remove the info bubble. Usually desirable, but use the html format if unwanted.
		$code = str_replace("output=embed", "output=embed&iwloc=near", $code);
		return $code;
	}

?>