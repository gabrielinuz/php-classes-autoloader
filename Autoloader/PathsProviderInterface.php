<?php
/**
* Copyright (c) Gabriel Ferreira <gabrielinuz@gmail.com>. All rights reserved. 
* Released under the MIT license
* https://opensource.org/licenses/MIT
**/

interface PathsProviderInterface
{   
	public function setFile( $filePath );
    public function appendPath( $path );
    public function setPaths( $paths );
    public function getPaths();
}
?>
