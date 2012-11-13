<?php
    function smarty_modifier_split($str, $delimiter, $name) {
		$mt = MT::get_instance();
		$ctx =& $mt->context();
		if (array_key_exists('__inside_set_hashvar', $ctx->__stash)) {
			$vars =& $ctx->__stash['__inside_set_hashvar'];
		} else {
			$vars =& $ctx->__stash['vars'];
		}
		
		if (!$str) {
    		$vars[$name] = array();
    	} else {
    		$parts = explode($delimiter, $str);
			$vars[$name] = $parts;
    	}
		return '';
    }
?>