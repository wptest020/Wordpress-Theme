<?php
if( !function_exists('homey_get_localization')) {
	function homey_get_localization() {
		$allowed_html_array = array(
		    'i' => array(
		        'class' => array()
		    ),
		    'strong' => array(),
		    'span' => array(
		        'class' => array()
		    ),
		    'a' => array(
		        'href' => array(),
		        'title' => array(),
		        'target' => array()
		    ),
		    'br' => array()
		);

		$localization = array(

			'topbar_contact_text' => esc_html__('Contact us', 'homey'),
			'sort_by' => esc_html__('Sort By', 'homey'),
			'kidding_text' => esc_html__('Are you kidding?', 'homey'),
			'no_rights_text' => esc_html__("you don\'t have the right to see this", 'homey'),
			'about_listing_title' => esc_html__('About this listing', 'homey'),
			'about_experience_title' => esc_html__('About this experience', 'homey'),
			'about_host_experience_title' => esc_html__('About the host', 'homey'),
			'type_label'  		  => esc_html__('Type', 'homey'),
			'accommodates_label'  		  => esc_html__('Accommodates', 'homey'),
			'opening_hours_label'  		  => esc_html__('Opening Hours', 'homey'),
			'mon_fri_label'  		  => esc_html__('Mon - Fri', 'homey'),
			'sat_label'  		  => esc_html__('Sat', 'homey'),
			'sun_label'  		  => esc_html__('Sun', 'homey'),
			'status_label'  		  => esc_html__('Status', 'homey'),
			'price_label'  		  => esc_html__('Price', 'homey'),
			'id_label'  		  => esc_html__('ID', 'homey'),
			'date_label'  		  => esc_html__('Date', 'homey'),
			'pets_label'  		  => esc_html__('Pets', 'homey'),
			'subtotal_label'  		  => esc_html__('Subtotal', 'homey'),
			'thumb_label'  		  => esc_html__('Thumbnail', 'homey'),
			'actions_label'  		=> esc_html__('Actions', 'homey'),
			'accom_label'  	      => esc_html__('Accomodation', 'homey'),
			'check_In'  		=> esc_html__('Check In', 'homey'),
			'check_Out'  		=> esc_html__('Check Out', 'homey'),

			'check_in'  		=> esc_html__('Check-in', 'homey'),
			'check_out'  		=> esc_html__('Check-out', 'homey'),
			'check_in_after'  		=> esc_html__('Check-in After', 'homey'),
			'check_out_before'  		=> esc_html__('Check-out Before', 'homey'),
			'size_label'  		=> esc_html__('Size', 'homey'),

            'bedrooms_label'  	=> esc_html__('Bedrooms', 'homey'),
			'bathrooms_label' 	=> esc_html__('Bathrooms', 'homey'),
			'rooms_label' 	=> esc_html__('Rooms', 'homey'),
			'fullbath_label' 	=> esc_html__('Full', 'homey'),
			'halfbath_label' 	=> esc_html__('Half Baths', 'homey'),
			'beds_label'      	=> esc_html__('Beds', 'homey'),
			'baths_label'     	=> esc_html__('Baths', 'homey'),

            'guests_label'    	=> esc_html__('Guests', 'homey'),
			'guest_label'    	=> esc_html__('Guest', 'homey'),

            'guests_label_exp'    	=> esc_html__('Guests', 'homey'),
			'guest_label_exp'    	=> esc_html__('Guest', 'homey'),

            'compare_label'    	=> esc_html__('Compare', 'homey'),
			'compare_exp_label'    	=> esc_html__('Compare', 'homey'),
			'save_favorite'    	=> esc_html__('Save to Favorite', 'homey'),
			'add_favorite'    	=> esc_html__('Add to Favorites', 'homey'),
			'remove_favorite'    	=> esc_html__('Remove from Favorite', 'homey'),

            'add_compare'    	=> esc_html__('Compare', 'homey'),
			'remove_compare'    	=> esc_html__('Remove from compare', 'homey'),
			'compare_limit'    	=> esc_html__('Maximum item compare are 4', 'homey'),

            'add_compare_exp'    	=> esc_html__('Compare', 'homey'),
			'remove_compare_exp'    	=> esc_html__('Remove from compare', 'homey'),
			'compare_limit_exp'    	=> esc_html__('Maximum item compare are 4', 'homey'),

            'excellent_label'    	=> esc_html__('Excellent', 'homey'),
			'print_label'    	=> esc_html__('Print this page', 'homey'),

			'con_name'    	=> esc_attr__('Name', 'homey'),
			'con_email'    	=> esc_attr__('Email', 'homey'),
			'con_phone'    	=> esc_attr__('Phone', 'homey'),
			'con_message'    	=> esc_attr__('Message', 'homey'),

			'hosted_by'    	=> esc_html__('Hosted by', 'homey'),
			'detail_heading'    	=> esc_html__('Details', 'homey'),
			'prices_heading'    	=> esc_html__('Prices', 'homey'),

		
			'information' => esc_html__('Information', 'homey'),
			'room_type' => esc_html__('What kind of place do you want to list?', 'homey'),

			'listing_title' => esc_html__('Title', 'homey'),
			'experience_title' => esc_html__('Title', 'homey'),
			'title_placeholder' => esc_html__('Enter the listing title', 'homey'),
			'title_experience_placeholder' => esc_html__('Enter the title', 'homey'),

			'listing_des' => esc_html__('Description', 'homey'),
			'experience_des' => esc_html__('Experience Description', 'homey'),
			'des_placeholder' => esc_html__('Enter the listing description', 'homey'),
			'des_experience_placeholder' => esc_html__('Enter the description', 'homey'),

			'no_of_bedrooms' => esc_html__('Number of bedrooms', 'homey'),
			'no_of_bedrooms_plac' => esc_html__('Enter number of bedrooms', 'homey'),
			'no_of_rooms' => esc_html__('Number of Rooms', 'homey'),
			'no_of_rooms_plac' => esc_html__('Enter number of rooms', 'homey'),
			'no_of_guests' => esc_html__('Number of guest', 'homey'),
			'no_of_guests_plac' => esc_html__('Enter number of guest', 'homey'),
			'no_of_beds' => esc_html__('Number of beds', 'homey'),
			'no_of_beds_plac' => esc_html__('Enter number of beds', 'homey'),
			'no_of_bathrooms' => esc_html__('Number of bathrooms', 'homey'),
			'no_of_bathrooms_plac' => esc_html__('Enter number of bathrooms', 'homey'),
			'listing_type' => esc_html__('Type of listing', 'homey'),
			'experience_type' => esc_html__('Type of experience', 'homey'),
			'listing_type_plac' => esc_html__('Select listing Type', 'homey'),
			'experience_type_plac' => esc_html__('Select Type', 'homey'),
			'listing_size' => esc_html__('Size', 'homey'),
			'experience_size' => esc_html__('Size', 'homey'),
			'size_placeholder' => esc_html__('Enter the size. Only numbers', 'homey'),

			'listing_size_unit' => esc_html__('Unit of measure', 'homey'),
			'experience_size_unit' => esc_html__('Unit of measure', 'homey'),
			'size_unit_placeholder' => esc_html__('Enter the unit of measure. Ex. SqFt', 'homey'),
			'features' => esc_html__('Features', 'homey'),
			'amenities' => esc_html__('Amenities', 'homey'),
			'facilities' => esc_html__('Facilities', 'homey'),
			'location' => esc_html__('Location', 'homey'),

			'address' => esc_html__('Address', 'homey'),
			'address_placeholder' => esc_html__('Enter the address', 'homey'),
			'address_des' => esc_html__('If you do not enter any address, then the map will not show on listing detail page.', 'homey'),
			'address_experience_des' => esc_html__('If you do not enter any address, then the map will not show on experience detail page.', 'homey'),

			'aptSuit' => esc_html__('Apt, Suite (Optional)', 'homey'),
			'aptSuit_placeholder' => esc_html__('Ex. #123', 'homey'),

			'day_daily_label' => esc_html__('Daily', 'homey'),
			'day_daily_plac' => esc_html__('Enter price for 1 day', 'homey'),

			'nightly_label' => esc_html__('Nightly', 'homey'),
			'nightly_plac' => esc_html__('Enter price for 1 night', 'homey'),

			'weekends_label' => esc_html__('Weekends', 'homey'),
			'weekends_plac' => esc_html__('Enter the unit price for a single day', 'homey'),

			'weekly7d_label' => esc_html__('Weekly (7d+)', 'homey'),
			'monthly30d_label' => esc_html__('Monthly (30d+)', 'homey'),
			'security_deposit_label' => esc_html__('Security deposit', 'homey'),
			'security_deposit_plac' => esc_html__('Enter price for security deposit', 'homey'),
			'tax_rate_label' => esc_html__('Tax %', 'homey'),
			'tax_rate_plac' => esc_html__('Enter tax percentage (only number)', 'homey'),
			'addinal_guests_label' => esc_html__('Additional guests', 'homey'),
			'addinal_guest_text' => esc_html__('Additional guests', 'homey'),
			'addinal_guests_plac' => esc_html__('Enter the price for 1 additional guest', 'homey'),
			'allow_additional_guests' => esc_html__('Allow additional guests', 'homey'),
			'cleaning_fee' => esc_html__('Cleaning fee', 'homey'),
			'cleaning_fee_plac' => esc_html__('Enter the price for cleaning fee', 'homey'),
			'cleaning_fee_type_label' => esc_html__('Cleaning fee type', 'homey'),
			'city_fee' => esc_html__('City fee', 'homey'),
			'city_fee_plac' => esc_html__('Enter the price for city fee', 'homey'),
			'city_fee_type_label' => esc_html__('City fee type', 'homey'),
			'daily_text' => esc_html__('Daily', 'homey'),
			'daily_date_text' => esc_html__('Daily', 'homey'),
			'hourly_text' => esc_html__('Hourly', 'homey'),
			'perstay_text' => esc_html__('Per stay', 'homey'),
			'min_no_of_days' => esc_html__('Minimum number of days', 'homey'),
			'max_no_of_days' => esc_html__('Maximum number of days', 'homey'),
			'setup_period_prices' => esc_html__('Setup Custom Period Prices', 'homey'),
			'custom_period_prices' => esc_html__('Custom Period Prices', 'homey'),

			'children_label' => esc_html__('Children', 'homey'),

			'min_days_booking' => esc_html__('Minimum days of a booking', 'homey'),
			'min_days_booking_plac' => esc_html__('Enter the minimum days of a booking (Only number)', 'homey'),
			'max_days_booking' => esc_html__('Maximum days of a booking', 'homey'),
			
			'max_days_booking_plac' => esc_html__('Enter the maximum days of booking (Only number)', 'homey'),

			'min_book_day_dates_error' => esc_html__('Minimum days of a booking are', 'homey'),
			'max_book_day_dates_error' => esc_html__('Maximum days of a booking are', 'homey'),

			'min_book_days_error' => esc_html__('Minimum days of a booking are', 'homey'),
			'max_book_days_error' => esc_html__('Maximum days of a booking are', 'homey'),

			'min_book_weeks_error' => esc_html__('Minimum weeks of a booking are', 'homey'),
			'max_book_weeks_error' => esc_html__('Maximum weeks of a booking are', 'homey'),

			'min_book_months_error' => esc_html__('Minimum months of a booking are', 'homey'),
			'max_book_months_error' => esc_html__('Maximum months of a booking are', 'homey'),

			'min_book_hours_error' => esc_html__('Minimum hours of a booking are', 'homey'),
			'max_book_hours_error' => esc_html__('Maximum hours of a booking are', 'homey'),

			'terms_rules' => esc_html__('Terms', 'homey'),
			'virtual_tour' => esc_html__('Virtual Tour', 'homey'),
			'smoking_allowed' => esc_html__('Smoking allowed', 'homey'),
			'pets_allowed' => esc_html__('Pets allowed', 'homey'), 
			'party_allowed' => esc_html__('Party allowed', 'homey'), 
			'children_allowed' => esc_html__('Children allowed', 'homey'),
			'similar_label' => esc_html__('Similar listings', 'homey'),
			'similar_experience_label' => esc_html__('Similar experiences', 'homey'),

			'accomodation_text' => esc_html__('Accomodation', 'homey'),

            'bedrooms_text' => esc_html__('Bedrooms', 'homey'),
			'acc_bedroom_name' => esc_html__('Bedroom name', 'homey'),
			'acc_bedroom_name_plac' => esc_html__('Ex. Master Room or Room 1', 'homey'),

            'what_provides_text' => esc_html__('What Provides', 'homey'),
			'acc_what_provide_name' => esc_html__('What I will provide', 'homey'),
			'acc_what_provide_name_plac' => esc_html__('Example: Cold Water', 'homey'),

            'acc_what_bring_name' => esc_html__('What you will bring', 'homey'),
			'acc_what_bring_name_plac' => esc_html__('Example: Yoga Mat', 'homey'),

            'acc_guests' => esc_html__('Number of guests', 'homey'),
			'acc_guests_plac' => esc_html__('Enter the number of guests for this room', 'homey'),

            'acc_no_of_beds' => esc_html__('Number of beds', 'homey'),
			'acc_no_of_beds_plac' => esc_html__('Enter the number of beds', 'homey'),
            'acc_bedroom_type' => esc_html__('Bed type', 'homey'),
			'acc_bedroom_type_plac' => esc_html__('Enter the bed type', 'homey'),

            'acc_no_of_items' => esc_html__('Number of items', 'homey'),
			'acc_no_of_items_plac' => esc_html__('Enter the number of items', 'homey'),
            'acc_what_provide_type' => esc_html__('What Provide type', 'homey'),
			'acc_what_provide_type_plac' => esc_html__('Enter the item type', 'homey'),
            'acc_btn_remove_item' => esc_html__('Remove this item', 'homey'),


            'acc_guests_label' => esc_html__('Guests', 'homey'),
			'acc_guest_label' => esc_html__('Guest', 'homey'),
			'acc_btn_add_other' => esc_html__('Add another room', 'homey'),
			'acc_btn_remove_room' => esc_html__('Remove this room', 'homey'),

			'services_text' => esc_html__('Services', 'homey'),
			'service_name' => esc_html__('Service name', 'homey'),
			'service_name_plac' => esc_html__('Ex. Projection Screen', 'homey'),
			'service_price' => esc_html__('Service Price', 'homey'),
			'service_price_plac' => esc_html__('Enter the service price', 'homey'),
			'service_des' => esc_html__('Service description', 'homey'),
			'service_des_plac' => esc_html__('Enter the service description', 'homey'),
			'btn_add_service' => esc_html__('Add another service', 'homey'),
			'btn_remove_service' => esc_html__('Remove this service', 'homey'),
			
			'text_show' => esc_html__('Show', 'homey'),
			'text_hide' => esc_html__('Hide', 'homey'),

			'sync_ical_label' => esc_html__('Sync iCal', 'homey'),
			'import_ical_label' => esc_html__('Import iCal', 'homey'),
			'ical_import' => esc_html__('Import', 'homey'),
			'ical_export' => esc_html__('Export', 'homey'),

			'text_yes' => esc_html__('Yes', 'homey'),
			'text_no' => esc_html__('No', 'homey'),
			'text_select' => esc_html__('Select', 'homey'),
			'openning_hours_label' => esc_html__('Opening Hours', 'homey'),
			'open_time_label' => esc_html__('Open Time', 'homey'),
			'close_time_label' => esc_html__('Close Time', 'homey'),
			'closed_label' => esc_html__('Closed', 'homey'),

			'add_rules_info' => esc_html__('Additional rules information', 'homey'),
			'add_rules_info_optional' => esc_html__('Additional rules information (Optional)', 'homey'),
			'reason_text_req' => esc_html__('Please add content', 'homey'),
			'processing_text' => esc_html__('Processing, Please wait...', 'homey'),

			'availability_label' => esc_html__('Availability', 'homey'),
			'min_stay_is' => esc_html__('The minimum stay is', 'homey'),
			'max_stay_is' => esc_html__('The maximum stay is', 'homey'),

			'day_date_label' => esc_html__('day', 'homey'),
			'day_dates_label' => esc_html__('days', 'homey'),

			'night_label' => esc_html__('night', 'homey'),
			'nights_label' => esc_html__('nights', 'homey'),

			'hour_label' => esc_html__('hour', 'homey'),
			'hours_label' => esc_html__('hours', 'homey'),
			'with_weekend_label' => esc_html__('with weekend', 'homey'),
			'with_custom_period_label' => esc_html__('with custom period', 'homey'),
			'with_custom_period_and_weekend_label' => esc_html__('custom period & weekend', 'homey'),

            'experience_avail_label' => esc_html__('Available', 'homey'),
			'experience_unavail_label' => esc_html__('Not Available', 'homey'),
			'experience_pending_label' => esc_html__('Pending', 'homey'),
			'experience_booked_label' => esc_html__('Booked', 'homey'),

            'avail_label' => esc_html__('Available', 'homey'),
			'unavail_label' => esc_html__('Not Available', 'homey'),
			'pending_label' => esc_html__('Pending', 'homey'),
			'booked_label' => esc_html__('Booked', 'homey'),

            'pending_id_label' => esc_html__('Pending id', 'homey'),
			'booking_id_label' => esc_html__('Booking id', 'homey'),
			'cal_label' => esc_html__('Calendar', 'homey'),
			'agree_term_text' => esc_html__('You need to agree with all rental policies and terms.', 'homey'),
			'choose_gateway_text' => esc_html__('please choose payment gateway', 'homey'),

			'pricing_label' => esc_html__('Pricing', 'homey'),

			'booking_commission_note' => wp_kses(__( '<strong>Note:</strong> 15% of your booking will be taken as commission when the guest books.', 'homey' ), $allowed_html_array),

			'ins_booking_label' => esc_html__('Instant booking', 'homey'),
			'ins_booking_des' => esc_html__('Allow instant booking for this place.', 'homey'),
			'ins_booking_des_exp' => esc_html__('Allow instant booking for this experience.', 'homey'),
			'weekend_days_label' => esc_html__('Select the days to apply weekend pricing', 'homey'),
			'sat_sun_label' => esc_html__('Saturday and Sunday', 'homey'),
			'fri_sat_label' => esc_html__('Friday and Saturday', 'homey'),
			'fri_sat_sun_label' => esc_html__('Friday, Saturday and Sunday', 'homey'),

			'long_term_pricing' => esc_html__('Long-term pricing', 'homey'),

			'weekly7DayDates' => esc_html__('Weekly - 7+ days', 'homey'),
			'monthly30DayDates' => esc_html__('Monthly - 30+ days', 'homey'),
			'weekly7DayDates_plac' => esc_html__('Enter the unit price for a single day', 'homey'),
			'monthly30DayDates_plac' => esc_html__('Enter the unit price for a single day', 'homey'),

			'weekly7nights' => esc_html__('Weekly - 7+ nights', 'homey'),
			'monthly30nights' => esc_html__('Monthly - 30+ nights', 'homey'),
			'weekly7nights_plac' => esc_html__('Enter the unit price for a single night', 'homey'),
			'monthly30nights_plac' => esc_html__('Enter the unit price for a single night', 'homey'),

			'add_costs_label' => esc_html__('Additional costs', 'homey'),


            'ad_experience_type' => esc_html__('Add Experience Type', 'homey' ),

			'country' => esc_html__('Country', 'homey'),
			'country_placeholder' => esc_html__('Enter the Country', 'homey'),

			'state' => esc_html__('State', 'homey'),
			'state_placeholder' => esc_html__('Enter the State', 'homey'),

			'city' => esc_html__('City', 'homey'),
			'city_placeholder' => esc_html__('Enter the City', 'homey'),

			'area' => esc_html__('Area', 'homey'),
			'area_placeholder' => esc_html__('Enter the Area', 'homey'),

			'ex_name' => esc_html__('Name', 'homey'),
			'ex_name_plac' => esc_html__('Enter service name', 'homey'),

			'ex_price' => esc_html__('Price', 'homey'),
			'ex_price_plac' => esc_html__('Enter price - only digits', 'homey'),

			'ex_single_fee' => esc_html__('Single Fee', 'homey'),
			'ex_per_night' => esc_html__('Per Night', 'homey'),
			'ex_per_guest' => esc_html__('Per Guest', 'homey'),
			'ex_per_night_per_guest' => esc_html__('Per Night Per Guest', 'homey'),

			'ex_type' => esc_html__('Type', 'homey'),
			'ex_type_plac' => esc_html__('Select Type', 'homey'),

			'zipcode' => esc_html__('Zip Code', 'homey'),
			'zipcode_placeholder' => esc_html__('Enter your Zip Code', 'homey'),

			'listing_map_label' => esc_html__('Do you want to show the listing map?', 'homey'),
			'experience_map_label' => esc_html__('Do you want to show the map?', 'homey'),
			'drag_pin' => esc_html__('Drag and drop the pin on map to find exact location', 'homey'),
			'drag_pin_des' => esc_html__('Drag and drop the pin on map to find exact location or use address field above.', 'homey'),
			'find_address' => esc_html__('Find the address on the map', 'homey'),
			'find_address_btn' => esc_html__('Find Address', 'homey'),
			'long' => esc_html__('Longitude', 'homey'),
			'lat' => esc_html__('Latitude', 'homey'),

			'360_virtual_tour_heading' => esc_html__('360° Virtual Tour', 'homey'),

			'gallery_heading' => esc_html__('Image Gallery', 'homey'),
			'drag_drop_img' => wp_kses(__( 'Drag and drop the images to customize the gallery order. Click on the star icon to set the featured image', 'homey' ), $allowed_html_array),
			'image_size_text' => esc_html__('(Minimum size 1440 x 900 px)', 'homey'),
			'upload_btn' => esc_html__('Select and upload', 'homey'),
			'video_heading' => esc_html__('Video', 'homey'),
			'video_url' => esc_html__('Video URL', 'homey'),
			'video_placeholder' => esc_html__('Enter the video link or URL. Supported formats: YouTube, Vimeo, SWF and MOV', 'homey'),
			'list_submit_msg' => esc_html__('Congratulations. Your listing has been submitted.', 'homey'),
			'list_updated' => esc_html__('Your listing has been updated successfully.', 'homey'),
			'list_upgrade_featured' => esc_html__('Your listing has been upgraded to featured successfully.', 'homey'),
			'complete_list_label' => esc_html__('Complete your listing', 'homey'),

            'experience_submit_msg' => esc_html__('Congratulations. Your experience has been submitted for approval.', 'homey'),
			'experience_updated' => esc_html__('Your experience has been updated successfully.', 'homey'),
			'experience_upgrade_featured' => esc_html__('Your experience has been upgraded to featured successfully.', 'homey'),
			'complete_experience_label' => esc_html__('Complete your experience', 'homey'),

			'make_available_text' => esc_html__('Click on a date to make it unavailable. Then click on it again to make available.', 'homey'),

			'are_you_sure_text' => esc_html__('Are you sure you want to do this?', 'homey'),
			'draft_btn' => esc_html__('Save as Draft', 'homey'),
			'continue_btn' => esc_html__('Continue', 'homey'),
			'loadmore_btn' => esc_html__('Load More', 'homey'),
			'submit_btn' => esc_html__('Submit', 'homey'),
			'upgrade_btn' => esc_html__('Upgrade to featured', 'homey'),
			'edit_btn' => esc_html__('Edit', 'homey'),
			'review_btn' => esc_html__('Review & Rating', 'homey'),
			'delete_btn' => esc_html__('Delete', 'homey'),
			'cancel_btn' => esc_html__('Cancel', 'homey'),
			'view_btn' => esc_html__('View', 'homey'),
			'update_btn' => esc_html__('Update', 'homey'),
			'print_btn' => esc_html__('Print', 'homey'),
			'back_btn' => esc_html__('Back', 'homey'),
			'save_btn' => esc_html__('Save', 'homey'),
			'reserve_btn' => esc_html__('Reserve', 'homey'),
			'msg_send_btn' => esc_html__('Send Message', 'homey'),
			'by_text' => esc_html__('By', 'homey'),
			'by_text_sm' => esc_html__('by', 'homey'),
			'read_more' => esc_html__('Read More', 'homey'),
			'manage_label' => esc_html__('Manage', 'homey'),
			'reserve_period_label' => esc_html__('Reserve a Period', 'homey'),
			'login_for_reservation' => esc_html__('You need to login in order to make a reservation', 'homey'),
			'security_check_text' => esc_html__('Security check failed', 'homey'),
			'reservation_text' => esc_html__('Reservation', 'homey'),

            'listing_owner_text' => esc_html__('You are not the owner of this listing', 'homey'),
			'listing_renter_text' => esc_html__('This reservation is not belong to you.', 'homey'),

            'experience_owner_text' => esc_html__('You are not the owner of this experience', 'homey'),
			'experience_renter_text' => esc_html__('This reservation is not belong to you.', 'homey'),

            'instance_booking_page' => esc_html__('The instant booking page has not been created. Please contact the website administrator.', 'homey'),

			'first_name_req' => esc_html__('First name required', 'homey'),
			'last_name_req' => esc_html__('Last name required', 'homey'),
			'phone_req' => esc_html__('Phone number required', 'homey'),
			'something_went_wrong' => esc_html__('Ops! Something went wrong. Please try again.', 'homey'),
			'belong_to' => esc_html__('Sorry, this reservation does not belong to you.', 'homey'),

			'listing_dont_have' => esc_html__("You don't have any listing at this moment.", 'homey'),
			'no_more_listings' => esc_html__('There are no more listings available', 'homey'),

			'experience_dont_have' => esc_html__("You don't have any experience at this moment.", 'homey'),
			'no_more_experiences' => esc_html__('There are no more experiences available', 'homey'),

			'fav_dont_have' => esc_html__("You don't have any favorite at this moment.", 'homey'),
			'reservation_not_found' => esc_html__("You don’t have any reservation at this moment.", 'homey'),
			'upcoming_reservation_not_found' => esc_html__("You don't have any upcoming reservation at this moment.", 'homey'),

			'reservation_label' => esc_html__('Reservation', 'homey'),
			'review_content_required' => esc_html__('Please add the review content', 'homey'),

			'dates_not_available' => esc_html__('Your dates are not available', 'homey'),
			'hours_not_available' => esc_html__('Your hours are not available', 'homey'),
			'dates_available' => esc_html__('Your dates are available!', 'homey'),
			'hours_available' => esc_html__('Your hours are available!', 'homey'),
			'request_sent' => esc_html__('Booking request sent. Please wait for confirmation!', 'homey'),
			'reserve_period_success' => esc_html__('You have successfully reserve a period', 'homey'),
			'fill_all_fields' => esc_html__('Please fill all the fields', 'homey'),
			'choose_checkin' => esc_html__('Please select arrive date', 'homey'),
			'choose_checkout' => esc_html__('Please select depart date', 'homey'),
			'choose_start_hour' => esc_html__('Please select start hour', 'homey'),
			'choose_end_hour' => esc_html__('Please select end hour', 'homey'),
			'choose_guests' => esc_html__('Please choose guests', 'homey'),

            'own_listing_error' => esc_html__('Your cannot book your own listing.', 'homey'),
			'host_user_cannot_book' => esc_html__('You need renter or subscriber login to book listing. ', 'homey'),

            'own_experience_error' => esc_html__('Your cannot book your own experience.', 'homey'),
			'experience_host_user_cannot_book' => esc_html__('You need renter or subscriber login to book experience. ', 'homey'),

			'start_date_label' => esc_html__('Please select start date', 'homey'),
			'end_date_label' => esc_html__('Please select end date', 'homey'),

			'feeds_imported' => esc_html__('Imported successfully', 'homey'),


			'login_text' => esc_html__('Login', 'homey'),
			'register_text' => esc_html__('Register', 'homey'),
			'become_host_text' => esc_html__('Become a Host', 'homey'),


			'cs_total' => esc_html__('Total', 'homey'),
			'cs_tax_fees' => esc_html__('Includes taxes and fees', 'homey'),
			'cs_view_details' => esc_html__('View details', 'homey'),
			'cs_add_guest' => esc_html__('Additional guest', 'homey'),
			'cs_add_guests' => esc_html__('Additional guests', 'homey'),
			'cs_cleaning_fee' => esc_html__('Cleaning fee', 'homey'),
			'cs_city_fee' => esc_html__('City fee', 'homey'),
			'cs_sec_deposit' => esc_html__('Security deposit', 'homey'),
			'cs_services_fee' => esc_html__('Service fees', 'homey'),
			'cs_taxes' => esc_html__('Taxes', 'homey'),
			'cs_payment_due' => esc_html__('Payment due', 'homey'),
			'cs_paid_payment_due' => esc_html__('Paid payment due', 'homey'),
			'cs_remaining_payment_due' => esc_html__('Remaining payment due', 'homey'),
			'cs_pay_rest_1' => esc_html__('Balance due of', 'homey'),
			'cs_pay_rest_2' => esc_html__('to pay locally to the host', 'homey'),

			'rating_poor' => esc_html__('Poor', 'homey'),
			'rating_fair' => esc_html__('Fair', 'homey'),
			'rating_average' => esc_html__('Average', 'homey'),
			'rating_good' => esc_html__('Good', 'homey'),
			'rating_excellent' => esc_html__('Excellent', 'homey'),
			'rating_review_label' => esc_html__('Review', 'homey'),
			'rating_reviews_label' => esc_html__('Reviews', 'homey'),
			'rating_noti' => esc_html__('Verified Reviews - All reviews are from verified guests.', 'homey'),

			'pr_iam' => esc_html__("Hi, I'm", 'homey'),
			'pr_followme' => esc_html__("Follow me", 'homey'),
			'pr_h_rating' => esc_html__('Host rating', 'homey'),
			'pr_btn_edit' => esc_html__('Edit', 'homey'),
			'pr_lang' => esc_html__('Languages', 'homey'),
			'pr_verified' => esc_html__('Verified', 'homey'),
			'pr_profile_status' => esc_html__('Profile Status', 'homey'),
			'pr_cont_host' => esc_html__('Contact the host', 'homey'),
			'pr_cont_me' => esc_html__('Request Information', 'homey'),

            'pr_listing_label' => esc_html__('Listings', 'homey'),

            'pr_experience_label' => esc_html__('Experiences', 'homey'),

            'pr_posts_label' => esc_html__('Posts', 'homey'),
			'pr_resv_label' => esc_html__('Reservations', 'homey'),
			'view_all_label' => esc_html__('View All', 'homey'),
			'upcoming_resv' => esc_html__('Upcoming Reservations', 'homey'),
			'my_resv' => esc_html__('My Reservations', 'homey'),
			'incoming_msg' => esc_html__('Incoming Messages', 'homey'),
			'recent_msg' => esc_html__('Recent Messages', 'homey'),
			

			'view_profile' => esc_html__( 'View Profile', 'homey' ),
			'is_featured_label' => esc_html__( 'Make this listing as featured?', 'homey' ),
			'experience_is_featured_label' => esc_html__( 'Make this experience as featured?', 'homey' ),
			'featured_label' => esc_html__( 'Featured', 'homey' ),
			'rentals_label' => esc_html__( 'Rentals', 'homey' ),
			'rental_label' => esc_html__( 'Rental', 'homey' ),

			'experiences_label' => esc_html__( 'Experiences', 'homey' ),
			'experience_label' => esc_html__( 'Experience', 'homey' ),

			'next_text' => esc_html__('Next', 'homey'),
			'prev_text' => esc_html__('Prev', 'homey'),
			'general' => esc_html__( 'General', 'homey' ),

			'your_name' => esc_html__( 'Your Name', 'homey' ),
			'your_email' => esc_html__( 'Your Email', 'homey' ),
			'your_comment' => esc_html__( 'Your Comments', 'homey' ),
			'btn_post_comment' => esc_html__( 'Post a Comment', 'homey' ),
			'join_discussion' => esc_html__( 'Join The Discussion', 'homey' ),

			'blog_search'	 	=> esc_html__( 'Search', 'homey' ),

			'under_review_label' => esc_html__('UNDER REVIEW', 'homey'),
			'new_label' => esc_html__('NEW', 'homey'),
			'res_avail_label' => esc_html__('AVAILABLE', 'homey'),
			'res_booked_label' => esc_html__('BOOKED', 'homey'),
			'res_declined_label' => esc_html__('DECLINED', 'homey'),
			'res_cancelled_label' => esc_html__('CANCELLED', 'homey'),
			'res_paynow_label' => esc_html__('Pay Now', 'homey'),
			'res_details_label' => esc_html__('Details', 'homey'),
			'res_confirm_label' => esc_html__('Confirm', 'homey'),
			'payment_process_label' => esc_html__('WAITING PAYMENT', 'homey'),
			'welcome_back_text' => esc_html__('Welcome back,', 'homey'),

			'order_info_label' => esc_html__('Below your order information', 'homey'),
			'pay_receive_label' => esc_html__("Thank you! We've received your payment.", 'homey'),


			'any'	=> esc_html__( 'Any', 'homey' ),
			'total_invoices'	=> esc_html__( 'Total Invoices:', 'homey' ),
			'start_date'		=> esc_html__( 'Start date', 'homey' ),
			'start_date_plac'		=> esc_html__( 'Enter start date', 'homey' ),
			'end_date'			=> esc_html__( 'End date', 'homey' ),
			'end_date_plac'			=> esc_html__( 'Enter end date', 'homey' ),
			'inv_type'			=> esc_html__( 'Type', 'homey' ),

            'inv_listing'		=> esc_html__( 'Listing', 'homey' ),
            'inv_experience'		=> esc_html__( 'Experience', 'homey' ),

            'inv_package'		=> esc_html__( 'Package', 'homey' ),
			'one_time_text' 	=> esc_html__( 'One Time', 'homey'),
			'recurring_text' 	=> esc_html__( 'Recurring', 'homey'),
			'resv_fee_text' 	=> esc_html__( 'Reservation Fee', 'homey'),
			'upgrade_text' 		=> esc_html__( 'Upgrade to Featured', 'homey'),
			'inv_status'		=> esc_html__( 'Status', 'homey' ),
			'paid'				=> esc_html__( 'Paid', 'homey' ),
			'not_paid'			=> esc_html__( 'Not Paid', 'homey' ),
			'order'				=> esc_html__( 'Order', 'homey' ),
			'inv_pay_method'	=> esc_html__( 'Payment Method','homey' ),
			'inv_btn_details'	=> esc_html__( 'Details', 'homey' ),
			'payment_details'	=> esc_html__( 'Payment details', 'homey' ),

            'inv_listing_title'	=> esc_html__( 'Listing Title', 'homey' ),
            'inv_experience_title'	=> esc_html__( 'Title', 'homey' ),

            'billing_type'		=> esc_html__( 'Billing Type', 'homey' ),
			'billing_for'		=> esc_html__( 'Billing For', 'homey' ),
			'inv_total'			=> esc_html__( 'Total', 'homey' ),
			'inv_booking_date'	=> esc_html__( 'Booking Date', 'homey' ),
			'inv_actions'		=> esc_html__( 'Actions', 'homey' ),
			'inv_date'			=> esc_html__( 'Date', 'homey' ),
			'customer_details'	=> esc_html__( 'Customer details:', 'homey' ),
			'customer_name'		=> esc_html__( 'Name:', 'homey' ),
			'customer_email'	=> esc_html__( 'Email:', 'homey' ),


			'nearby_label'	=> esc_html__('Nearby', 'homey'),
			'pwb_label'	=> esc_html__('Powered by', 'homey'),
			'yelp_label'	=> esc_html__('Yelp', 'homey'),


			'ins_page_title' => esc_html__('Enjoy and book with confidence.', 'homey'),
			'ins_page_subtitle' => esc_html__('Leave the ability to add content in this page', 'homey'),
			'ins_notic' => esc_html__('Please act quickly! Rates and availability are subject to change.', 'homey'),
			'ins_unavailable' => esc_html__("We're sorry, but the dates you are trying to reserve are no longer available. Please select new stay dates and try again.", 'homey'),
			'hour_ins_unavailable' => esc_html__("We're sorry, but the hours you are trying to reserve are no longer available. Please select new stay hours and try again.", 'homey'),
			'ins_no_checkin' => esc_html__("Please choose check in date", 'homey'),
			'ins_no_checkout' => esc_html__("Please choose check out date", 'homey'),

            'ins_no_listing' => esc_html__("The listing you are looking for is not available", 'homey'),
            'ins_no_experience' => esc_html__("The experience you are looking for is not available", 'homey'),

            'ins_book_proceed' => esc_html__("Check out date must be greater then check in date", 'homey'),
			'ins_hourly_book_proceed' => esc_html__("Check out hour must be greater then check in hour", 'homey'),
			'guest_allowed' => esc_html__("Maximum guests allowed are", 'homey'),
			'learnmore' => esc_html__('Learn More', 'homey'),

			'speaks_label' => esc_html__('Speaks', 'homey'),
			'message_plac' => esc_html__('Type your message here...', 'homey'),
			'start_booking' => esc_html__('Start booking', 'homey'),
			'intro_to_host' => esc_html__('Introduce your self to the host', 'homey'),
			'rules_policies' => esc_html__('Rules & Policies', 'homey'),
			'cancel_policy' => esc_html__('Cancellation Policy', 'homey'),
			'cancel_policy_plac' => esc_html__('Enter your cancellation policy', 'homey'),
			'refund_des' => esc_html__('Full refund 1 day prior arrival, exceept fees', 'homey'),
			'owner_rules' => esc_html__('Owner rules', 'homey'),
			'rental_agr_label' => esc_html__('Rental Agreement', 'homey'),
			'agr_policy' => esc_html__('You must review and agree to all rules and policies to continue.', 'homey'),
			'read_agr_text' => esc_html__('I have read and agree with all rental policies and terms.', 'homey'),
			'payment_label' => esc_html__('Payment', 'homey'),
			'select_payment' => esc_html__('Select the payment method', 'homey'),
			'btn_process_pay' => esc_html__('Process Payment', 'homey'),
			'fusername_label' => esc_html__('Username', 'homey'),
			'fusername_plac' => esc_html__('Enter your username', 'homey'),
			'fname_label' => esc_html__('First name', 'homey'),
			'fname_plac' => esc_attr__('Enter your name', 'homey'),
			'lname_label' => esc_html__('Last name', 'homey'),
			'lname_plac' => esc_attr__('Enter your last name', 'homey'),
			'email_label' => esc_html__('Email', 'homey'),
			'email_plac' => esc_attr__('Enter your email', 'homey'),
			'phone_label' => esc_html__('Phone', 'homey'),
			'phone_plac' => esc_attr__('Enter your phone', 'homey'),
			'bio_label' => esc_html__('Bio', 'homey'),
			'native_lang_label' => esc_attr__('Native Language', 'homey'),
			'other_lang_label' => esc_html__('Other Language', 'homey'),
			'display_name_as' => esc_html__('Display name publicly as', 'homey'),

			/*------------------------------------------------------
			* Searches
			*------------------------------------------------------*/
			'whr_to_go' => esc_attr__('Where to go?', 'homey' ),
			'arrive_label' => esc_attr__('Arrive', 'homey' ),
			'depart_label' => esc_attr__('Depart', 'homey' ),
			'arrive_depart_label' => esc_attr__('Arrive & Depart', 'homey' ),
			'sr_guests_label' => esc_html__('Guests', 'homey' ),
			'sr_guest_label' => esc_html__('Guest', 'homey' ),
			'sr_adults_label' => esc_html__('Adults', 'homey' ),
			'sr_child_label' => esc_html__('Children', 'homey' ),
			'sr_apply_label' => esc_html__('Apply', 'homey' ),
			'sr_listing_type_label' => esc_html__('Listing Type', 'homey' ),
			'sr_experience_type_label' => esc_html__('Experience Type', 'homey' ),
			'sr_room_type_label' => esc_html__('Room Type', 'homey' ),
			'search_btn' => esc_html__('Search', 'homey' ),
			'adv_btn' => esc_html__('Advanced', 'homey' ),
			'search_size' => esc_html__('Size', 'homey' ),
			'search_bedrooms' => esc_html__('n. of bedrooms', 'homey' ),
			'search_rooms' => esc_html__('n. of rooms', 'homey' ),
			'search_price' => esc_html__('Price', 'homey' ),
			'search_min' => esc_html__( 'Min.', 'homey'),
			'search_max' => esc_html__( 'Max.', 'homey'),
			'search_amenities' => esc_html__('Amenities', 'homey' ),
			'search_facilities' => esc_html__('Facilities', 'homey' ),
			'search_host_languages' => esc_html__('Host Languages', 'homey' ),
			'search_area' => esc_html__('Area', 'homey' ),
			'search_rules' => esc_html__('House Rules', 'homey' ),
			'search_lang' => esc_html__('Host Language', 'homey' ),
			'search_more' => esc_html__('More', 'homey' ),
			'search_reset' => esc_html__('Reset', 'homey' ),
			'search_apply' => esc_html__('Apply Filters', 'homey' ),

            /*------------------------------------------------------
			* Searches Experience
			*------------------------------------------------------*/
			'whr_to_go_exp' => esc_attr__('Where to go?', 'homey' ),
			'date_label_exp' => esc_attr__('Date', 'homey' ),
			'arrive_label_exp' => esc_attr__('Date', 'homey' ),
			'depart_label_exp' => esc_attr__('Depart', 'homey' ),
			'arrive_depart_label_exp' => esc_attr__('Arrive & Depart', 'homey' ),

            'sr_guests_label_exp' => esc_html__('Guests', 'homey' ),
			'sr_guest_label_exp' => esc_html__('Guest', 'homey' ),

            'sr_adults_label_exp' => esc_html__('Adults', 'homey' ),
			'sr_child_label_exp' =>  esc_html__('Children', 'homey' ),
			'sr_apply_label_exp' =>  esc_html__('Apply', 'homey' ),
			'sr_listing_type_label_exp' =>  esc_html__('Listing Type', 'homey' ),
			'sr_experience_type_label_exp' =>  esc_html__('Experience Type', 'homey' ),
			'sr_room_type_label_exp' =>  esc_html__('Room Type', 'homey' ),
			'search_btn_exp' =>  esc_html__('Search', 'homey' ),
			'adv_btn_exp' =>  esc_html__('Advanced', 'homey' ),
			'search_size_exp' =>  esc_html__('Size', 'homey' ),
			'search_bedrooms_exp' =>  esc_html__('n. of bedrooms', 'homey' ),
			'search_rooms_exp' =>  esc_html__('n. of rooms', 'homey' ),
			'search_price_exp' =>  esc_html__('Price', 'homey' ),
			'search_min_exp' =>  esc_html__( 'Min.', 'homey'),
			'search_max_exp' =>  esc_html__( 'Max.', 'homey'),
			'search_amenities_exp' =>  esc_html__('Amenities', 'homey' ),
			'search_facilities_exp' =>  esc_html__('Facilities', 'homey' ),
			'search_host_languages_exp' =>  esc_html__('Host Languages', 'homey' ),
			'search_area_exp' =>  esc_html__('Area', 'homey' ),
			'search_rules_exp' =>  esc_html__('House Rules', 'homey' ),
			'search_lang_exp' =>  esc_html__('Host Language', 'homey' ),
			'search_more_exp' =>  esc_html__('More', 'homey' ),
			'search_reset_exp' =>  esc_html__('Reset', 'homey' ),
			'search_apply_exp' =>  esc_html__('Apply Filters', 'homey' ),

			/*------------------------------------------------------
			* Menus
			*------------------------------------------------------*/
			'm_dashboard_label' => esc_html__('Dashboard', 'homey' ),
			'm_profile_label' => esc_html__('Profile', 'homey' ),

            'm_listings_label' => esc_html__('My Listings', 'homey' ),
			'm_add_listing_label' => esc_html__('Add New', 'homey' ),

            'm_experiences_label' => esc_html__('My Experiences', 'homey' ),
			'm_add_experience_label' => esc_html__('Add New', 'homey' ),

            'm_reservation_label' => esc_html__('Reservations', 'homey' ),
			'm_favorites_label' => esc_html__('Favorites', 'homey' ),
			'm_invoices_label' => esc_html__('Invoices', 'homey' ),
			'm_messages_label' => esc_html__('Messages', 'homey' ),
			'm_saved_search_label' => esc_html__('Saved Searches', 'homey' ),
			'm_logout_label' => esc_html__('Log out', 'homey' ),

			/*------------------------------------------------------
			* Hourly Calendar
			*------------------------------------------------------*/
			'hc_reserved_label' => esc_html__('Reserved', 'homey' ),
			'hc_pending_label' => esc_html__('Pending', 'homey' ),
			'hc_hours_label' => esc_html__('Hours', 'homey' ),
			'hc_today_label' => esc_html__('Today', 'homey' ),

            /*--------------------------------------------
            * Experiences
             */
            'experience_hours_label'  	=> esc_html__('Hours', 'homey'),
            'experience_language_label' => esc_html__('Language', 'homey' ),
            'experience_language' => esc_html__('Language', 'homey' ),
			'experience_max_stay_is' => esc_html__('Maximum Stay Is', 'homey' ),
			'experience_min_stay_is' => esc_html__('Minimum Stay Is', 'homey' ),
			'experience_add_rules_info' => esc_html__('Add Rules Info', 'homey' ),
			'experience_max_no_of_persons' => esc_html__('Maximum No Of Persons', 'homey' ),
			'experience_addinal_guests_label' => esc_html__('Additional Guests Label', 'homey' ),
			'experience_security_deposit_label' => esc_html__('Security Deposit Label', 'homey' ),
			'experience_guests_label' => esc_html__('Guests Label', 'homey' ),
			'experience_opening_hours_label' => esc_html__('Opening Hours Label', 'homey' ),
			'experience_about_experience_title' => esc_html__('About Title', 'homey' ),
			'experience_about_host_title' => esc_html__('About Host', 'homey' ),
			'experience_accom_label' => esc_html__('Accommodation Label', 'homey' ),
			'experience_type_label' => esc_html__('Type Label', 'homey' ),
            'experience_no_of_guests' => esc_html__('No of guests', 'homey' ),
            'experience_ins_booking_label' => esc_html__('Instant Booking Label', 'homey' ),
			'experience_nightly_label' => esc_html__('Persons Label', 'homey' ),
			'experience_price_postfix' => esc_html__('Persons Postfix', 'homey' ),
			'experience_allow_additional_guests' => esc_html__('Allow Additional Guests', 'homey' ),
			'experience_cleaning_fee' => esc_html__('Cleaning Fee', 'homey' ),
			'experience_city_fee' => esc_html__('City Fee', 'homey' ),
			'experience_tax_rate_label' => esc_html__('Tax Rate Label', 'homey' ),
			'experience_address' => esc_html__('Address', 'homey' ),
			'experience_aptSuit' => esc_html__('Appartment Suit', 'homey' ),
			'experience_country' => esc_html__('Country', 'homey' ),
			'experience_state' => esc_html__('State', 'homey' ),
			'experience_city' => esc_html__('City', 'homey' ),
			'experience_area' => esc_html__('Area', 'homey' ),
			'experience_zipcode' => esc_html__('Zip Code', 'homey' ),
			'experience_video_heading' => esc_html__('Video Heading', 'homey' ),
			'experience_add_video_url' => esc_html__('Video', 'homey' ),
			'experience_cancel_policy' => esc_html__('Cancel policy', 'homey' ),
			'experience_min_days_booking' => esc_html__('Minimum Days', 'homey' ),
			'experience_max_days_booking' => esc_html__('Maximum Days', 'homey' ),
			'experience_check_in_after' => esc_html__('Checkin After', 'homey' ),
			'experience_check_out_before' => esc_html__('Checkout Before', 'homey' ),
			'experience_smoking_allowed' => esc_html__('Smoking Allowed', 'homey' ),
			'experience_pets_allowed' => esc_html__('Pets Allowed', 'homey' ),
			'experience_party_allowed' => esc_html__('Party Allowed', 'homey' ),
			'experience_children_allowed' => esc_html__('Children Allowed', 'homey' ),
			'experience_add_rules_info_optional' => esc_html__('Rules Info Optional', 'homey' ),
			'experience_openning_hours_label' => esc_html__('Opening Hours', 'homey' ),
			'experience_setup_period_prices' => esc_html__('Setup Period Prices', 'homey' ),

		);

		return $localization;
	}
}
