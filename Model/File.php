<?php
class File extends Manager
{
    private $file;

    function setFile($f)
    {
        $this->file = $f;
    }
    function getFile()
    {
        return $this->file;
    }
}

?>