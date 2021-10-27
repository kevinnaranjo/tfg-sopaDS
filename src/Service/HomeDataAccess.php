<?php


namespace App\Service;


class HomeDataAccess extends DataAccess
{

    public function getPruebas()
    {
        return parent::executeSQL("SELECT * FROM prueba")->fetchAll();
    }

    public function getExamenesPorAnno(int $anno)
    {
        return parent::executeSQL("SELECT * FROM examen where anno = $anno")->fetchAll();
    }
}