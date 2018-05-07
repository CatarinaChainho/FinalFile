<?php

function redirect($path)
{
	header("Location: {$path}");
}

function view($name, $data = [])
{
	extract($data);

	require "app/views/{$name}.view.php";
}