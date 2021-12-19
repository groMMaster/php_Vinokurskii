<?php
namespace App;

class MagicClass {
	public function __call($x1='a', $x2='b') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public static function __callStatic($x1='a', $x2='b') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __get($x1='a') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __set($x1='a', $x2='b') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __isset($x1='a') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __unset($x1='a') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __sleep($x1='a') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function  __wakeup($x1='a') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function  __serialize($x1='a') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __unserialize($x1='a') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __toString() {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __invoke($x1='a') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __set_state($x1='a') {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __clone() {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __debugInfo() {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}

	public function __destruct() {
		echo "<pre>"; var_dump(__FUNCTION__); echo "</pre>";
	}
}
?>
