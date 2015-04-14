<?php

class Session {
	
	
	function authed(){
		return !is_null($this->get('authed'));
	}
	
	
	function set($key, $val)
	{
		$_SESSION[$key] = $val;
	}
	
	function get($key)
	{
        if(isset($key) && isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
	}
	
	function destroy()
	{
		session_destroy();
	}

}

?>