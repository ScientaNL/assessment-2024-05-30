<?php

declare(strict_types=1);

namespace ScientaAssessment;

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('xdebug.var_display_max_depth', '15');

require_once 'TreeAssessment.php';

//Start here :-)
$data = include('data.php');

class Assessment implements TreeAssessment {    
    public function parentSort(array $a, array $b): int{
        if ($a['parentId'].$a['ordering'] == $b['parentId'].$b['ordering']) {
            return 0;
        }
        return ($a['parentId'].$a['ordering'] < $b['parentId'].$b['ordering']) ? -1 : 1;
    }

    public function buildTree(array $listData): mixed{
        $pointers = [];
        $data = [];

        usort($listData, array($this, 'parentSort'));
        
        foreach($listData as &$singleData){
            $singleData['children'] = [];

            if($singleData['parentId'] == null){
                $data[$singleData['itemId']] = $singleData;
                $pointers[$singleData['itemId']] = &$data[$singleData['itemId']];
            } else {
                $pointers[$singleData['parentId']]['children'][$singleData['itemId']] = &$singleData;

                $pointers[$singleData['itemId']] =  &$pointers[$singleData['parentId']]['children'][$singleData['itemId']];
            }
        }
        
        return $data;
    }

    public function generateHtmlTree(array $treeData): string{
        $html = $this->getHTMLTreeForChildren($treeData, "");

        return $html;
    }

    public function getHTMLTreeForChildren(array $treeData, string $html): string{
        $html = "<ul>";

        foreach($treeData as &$single){
            $html .= "<li>".$single['title']." (itemId ".$single['itemId'].")</li>";

            if(sizeof($single['children']) > 0){
                $html .= $this->getHTMLTreeForChildren($single['children'], $html);
            }
        }

        $html .= "</ul>";
        
        return $html;
    }
}

$assessment = new Assessment();
$treeData = $assessment->buildTree($data);

echo $assessment->generateHtmlTree($treeData);

usort($data, array($assessment, 'parentSort'));

//var_dump($data);
die();
