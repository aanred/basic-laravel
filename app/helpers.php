<?php

if ( !function_exists('is_user_logged_in') ) :
	function is_user_logged_in() {
		static $login;
		if ( !isset($login) )
			$login = auth()->check();

		return $login;
	}
endif;

if ( !function_exists('auth_user') ) :
	function auth_user() {
		static $auth_user;
		if ( !isset($auth_user) || empty($auth_user) && is_user_logged_in() ) {
			$auth_user = auth()->user();
		}

		return $auth_user;
	}
endif;

if ( !function_exists('form_default_class') ) :
	function form_default_class($custom, $default){
		if (isset($custom['class'])){
			$classes = explode(' ', $custom['class']);
			$classes = array_merge($classes, $default);
			$classes = array_unique($classes);

			$custom['class'] = implode(' ', $classes);
		}else{
			$custom['class'] = implode(' ', $default);
		}

		return $custom;
	}

endif;

if ( !function_exists('form_dropdown') ) :
	function form_dropdown($name, $options, $value = null, $custom = []) {
		$value = ( $value ) ? $value : old($name, null);
		return Form::select($name, $options, $value, form_default_class($custom, ['selectpicker', 'show-menu-arrow']));
	}
endif;

if ( !function_exists('form_input') ) :
	function form_input($name, $value = null, $custom = []) {
		$value = ( $value ) ? $value : old($name, null);
		return Form::text($name, $value, form_default_class($custom, ['form-control']));
	}
endif;

if ( !function_exists('form_textarea') ) :
	function form_textarea($name, $value = null, $custom = []) {
		$value = ( $value ) ? $value : old($name, null);
		return Form::textarea($name, $value, form_default_class($custom, ['form-control']));
	}
endif;

if ( !function_exists('form_hidden') ) :
	function form_hidden($name, $value = null, $custom = []) {
		$value = ( $value ) ? $value : old($name, null);
		return Form::hidden($name, $value, form_default_class($custom, ['form-control']));
	}
endif;

if ( !function_exists('form_password') ) :
	function form_password($name, $custom = []) {
		return Form::password($name, form_default_class($custom, ['form-control']));
	}
endif;

if ( !function_exists('form_checkbox') ) :
	function form_checkbox($name, $value = 1, $checked = false) {
		return Form::checkbox($name, $value, $checked);
	}
endif;

if ( !function_exists('form_radio') ) :
	function form_radio($name, $value, $checked = false) {
		return Form::radio($name, $value, $checked);
	}
endif;

if ( !function_exists('form_button') ) :
	function form_button($value, $custom = []) {
		return Form::button($value, form_default_class($custom, ['btn', 'btn-primary']));
	}
endif;

if ( !function_exists('form_submit') ) :
	function form_submit($value, $custom = []) {
		$custom = form_default_class($custom, ['btn', 'btn-primary']);
		$custom['type'] = 'submit';
		$custom['data-loading-text'] = '<i class="fa fa-cog fa-spin"></i> Loading...';

		return Form::button($value, $custom);
	}
endif;

if ( !function_exists('form_checkbox') ) :
	function form_checkbox($name, $value = 1, $checked = null, $custom = []) {
		return Form::checkbox($name, $value, $checked, $custom);
	}
endif;

if ( !function_exists('form_switch') ) :
	function form_switch($name, $checked = null, $textlabel = '', $custom = []) {

		$switcher = '<div class="checkbox checkbox-switchery">';
			$switcher .= '<label>';
				$switcher .= '<input type="hidden" name="' . $name .'" value="0" />';
				$switcher .= Form::checkbox($name, 1, $checked, form_default_class($custom, ['switchery']));
				if ( !empty($textlabel) )
					$switcher .= '&nbsp;' . $textlabel;
			$switcher .= '</label>';
		$switcher .= '</div>';

		return $switcher;
	}
endif;

if ( ! function_exists('menu_active') ) :
	function menu_active($uri = '') {
		$active = '';

		if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
			$active = 'active';
		}

		return $active;
	}
endif;