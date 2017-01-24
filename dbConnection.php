<?php

/**
 * Created by PhpStorm.
 * User: marcneisser
 * Date: 1/2/17
 * Time: 10:42 AM
 * this class connects
 */
class dbConnection
{
    protected $dndDB;
    private $db_host='localhost';
    private $db_user='root';
    private $db_pass='tazer101';
    private $db_name='dndDataBase';

    /**
     * dbConnection constructor.
     */
    public function __construct()
    {
        $this->dndDB=new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name)
            or die($this->dndDB->error);

        return $this->dndDB;
    }

    /**
     * @return mysqli
     */
    public function getDndDB(): mysqli
    {
        return $this->dndDB;
    }

    function __destruct()
    {
        $this->dndDB->close();
    }


}