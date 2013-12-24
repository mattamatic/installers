<?php
namespace Composer\Installers;

class YiiInstaller extends BaseInstaller
{
    protected $locations = array(
    	'theme'		=> 'themes/{$name}/',
    	'module'	=> 'protected/modules/{$name}/',
    	'extension'	=> 'protected/extensions/{$name}/',
    );
}
