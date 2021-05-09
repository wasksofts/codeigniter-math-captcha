<?php

/*
|--------------------------------------------------------------------------
| Captcha
|
| You can set captcha that created by Auth library in here.
| 'captcha_path' = Directory where the catpcha will be created.
| 'captcha_font_size' = Font size when writing text to captcha. Leave blank for random font size.
| 'captcha_grid' = Show grid in created captcha.
| 'captcha_expire' = Life time of created captcha before expired, default is 3 minutes (180 seconds).
| 'captcha_case_sensitive' = Captcha case sensitive or not.
|--------------------------------------------------------------------------
*/
$config['captcha_path'] = 'assets/captcha/';
$config['captcha_width'] = 100;
$config['captcha_height'] = 20;
$config['captcha_font_size'] = 16;
$config['captcha_expire'] = 60 * 3;
$config['captcha_case_sensitive'] = TRUE;

