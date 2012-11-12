<?php
    function smarty_modifier_split($str, $delimiter, $name) {
		$parts = explode($delimiter, $str);

		$mt = MT::get_instance();
		$ctx =& $mt->context();
		if (array_key_exists('__inside_set_hashvar', $ctx->__stash)) {
			$vars =& $ctx->__stash['__inside_set_hashvar'];
		} else {
			$vars =& $ctx->__stash['vars'];
		}
		$vars[$name] = $parts;
		return '';
    }
?>