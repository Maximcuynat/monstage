<?php
class File extends Manager
{
    private $file;

    function createFile($file)
    {
        $this->getBdd();
        $values = ['file' => $file];
        $this->addValueTable('File', $values);
    }

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