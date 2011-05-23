<?php

$attributes = array();

$tag = 'h1';
$attributes = array("class" => "author color_blue", "event" => "onblur");
$content = "Isn't this a lot simpler?";

function tag($tag, $attributes, $content) {
	
	$output = '<' . $tag;
	print_r($attributes);

	foreach($attributes as $key => $value) {
			$output .= ' ' . $key . '="' . $value . '"';
	}

	$output .= '>' . $content . '</' . $tag . '>';
	
	return $output;
}

function string_check($value) {
	
	if(is_string($value)) {
		return true;
	}
}

?>