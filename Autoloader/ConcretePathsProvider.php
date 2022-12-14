<?php
/**
* Copyright (c) Gabriel Ferreira <gabrielinuz@gmail.com>. All rights reserved. 
* Released under the MIT license
* https://opensource.org/licenses/MIT
**/
require_once "PathsProviderInterface.php";

class ConcretePathsProvider implements PathsProviderInterface
{
    public function __construct()
    {
        $this->paths = array();
    }

    public function setFile( $filePath )
    {
        $this->paths = parse_ini_file($filePath);
    }

    public function appendPath( $path )
    {
        array_push($this->paths, $path);
    }

    public function setPaths( $paths )
    {
        $this->paths = $paths;
    }

    public function getPaths()
    {
        return $this->paths;
    }
}
?>
