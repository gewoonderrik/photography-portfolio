<?php
namespace LauraWienk;

final class ImageQuality
{
	public function __construct()
	{
		add_filter('jpeg_quality', function($arg) {
			return 95;
		});
	}
}
