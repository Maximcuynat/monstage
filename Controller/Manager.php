<?php
abstract class Manager
{
    private static $_bdd;

    private static function setBdd()
    {
        try{
            self::$_bdd = new PDO('mysql:host=localhost;dbname=f1','root');
            self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        catch(Exception $e){
            die("Connection failed: " . $e->getMessage());
        }
        
    }
    protected function getBdd()
    {
        if(self::$_bdd == null)
            $this->setBdd();
        return self::$_bdd;
    }

    // récupéré toutes les donnée d'une table
    protected function getAll($table, $obj)
    {
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '. $table);
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    // Récupéré les valeurs d'une table avec le nom des valeurs des colonnes
    protected function getColumnValue($table, $obj, $column, $value)
    {
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '.$table.' WHERE '.$column.' like "'.$value.'%"');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    // Ajouter une valeur
    protected function addValueTable($table, $values)
    {
        $rqt1 = '(';
        $rqt2 = '(';
        foreach($values as $key => $donnee)
        {
            $rqt1 = $rqt1.$key.' ';
            $rqt2 = $rqt2."'".$donnee."' ";
        }
        $rqt1 = $rqt1.')'; $rqt2 = $rqt2.')';
        $rqt1=str_replace(' ', ',', $rqt1); $rqt2=str_replace(' ', ',', $rqt2);
        $rqt1=str_replace(',)', ')', $rqt1); $rqt2=str_replace(',)', ')', $rqt2);
        $rqt = 'INSERT INTO '.$table.$rqt1.' VALUE '.$rqt2;
        try
        {
            $req = self::$_bdd->prepare($rqt);
            $req->execute();
            $req->closeCursor();
        }
        catch(Exception $e)
        {
            echo "Failed: " . $e->getMessage();
        } 
    }
    
    protected function UpdTable($table, $values, $id, $idValue)
    {
        $rqt = "UPDATE ".$table." SET ";
        $rqt1 = "";
        foreach($values as $key => $val)
        {
            $rqt1 = $rqt1.$key." = '".$val."', ";
        }
        $rqt = $rqt.$rqt1.'WHERE '.$id.'='.$idValue;
        $rqt=str_replace(', W', ' W', $rqt);
        try
        {
            $req = self::$_bdd->prepare($rqt);
            $req->execute();
            $req->closeCursor();
        }
        catch(Exception $e)
        {
            echo "Failed: " . $e->getMessage();
        } 
    }

    protected function deleteFromTable($table, $id, $idValue)
    {
        $rqt = "DELETE FROM ".$table." WHERE ".$id." = ".$idValue;
        try
        {
            $req = self::$_bdd->prepare($rqt);
            $req->execute();
            $req->closeCursor();
            echo "Suppression effectué";
        }
        catch(Exception $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}