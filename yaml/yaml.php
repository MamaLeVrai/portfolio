<?php

/*****************************************************
https://symfony.com/doc/current/components/yaml.html
******************************************************/

require_once('vendor/autoload.php');
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

function yaml_parse_file($file){
	try {
		return Yaml::parseFile($file);
	} catch (ParseException $exception) {
		printf('Unable to parse the YAML string: <b>%s</b>', $exception->getMessage());
	}
}

function print_array($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}


?>