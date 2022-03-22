<?php

namespace app\core\base\controllers;
use app\core\base\models\CsvFile;

class CsvController extends Controller
{

    public function index(Request $request, Response $response)
    {   $params = $this->show();
        $this->setLayout('main');
        return $this->render('csv', $params);
    }

    public function upload(Request $request, Response  $response)
    {
        $file = $request->getFile();
        if ($file) {
          $res =  $this->readFileCsv($file);
        }
        if (empty($res)) {
            return 'error';
        }

        return $response->redirect('/csv');
    }

    public function readFileCsv($file = null)
    {
        $result = [];
        if ($file) {
            if ($file['csv']['type'] != 'application/vnd.ms-excel' || $file['csv']['type'] == '') {
                return $result;
            } else {
                    $fileData = fopen($file['csv']['tmp_name'], "r");
                    $row = 1;

                    while ($data = fgetcsv($fileData, 200, ",")) {
                        if ($row == 1) {
                            $row++;
                            continue;
                        }
                        $csvModel = new CsvFile();
                        $csvModel->loadData($data);
                        $csvModel->saveCsv();

                        $result[] = $csvModel;
                    }
                }
            }

        return $result;
    }

    public function show()
    {
        $dbtable = new CsvFile();
        return $dbtable->showCsv();
    }



}