<?php namespace Imanager;

interface FieldInterface
{
	const PREFIX = 'custom-';

	public function render($sanitize=false);

	public function getConfigFieldtype();
}