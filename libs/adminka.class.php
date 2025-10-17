<?php

class Adminka
{

    function XLSborders($objPHPExcel, $cell) {
        $objPHPExcel->getActiveSheet()
            ->getStyle($cell)
            ->getBorders()
            ->getBottom()
            ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

        $objPHPExcel->getActiveSheet()
            ->getStyle($cell)
            -> getBorders()
            ->getLeft()
            ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

        $objPHPExcel->getActiveSheet()
            ->getStyle($cell)
            ->getBorders()
            ->getRight()
            ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

        $objPHPExcel->getActiveSheet()
            ->getStyle($cell)
            ->getBorders()
            ->getBottom()
            ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
    }

    function setXLSwidth($objPHPExcel) {
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(false);
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth('5');
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(false);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth('60');
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(false);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth('10');
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(false);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth('15');
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(false);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth('15');
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(false);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth('15');
    }

    function setXLSwidthPrice($objPHPExcel) {
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(false);
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth('5');
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(false);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth('65');
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(false);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth('15');
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(false);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth('15');
    }

    function exportXLSforPrime ($admin_path, $headersWorks, $statRecordsWorks, $headersMaterials, $statRecordsMat, $allWorks, $allMaterials, $nakData, $rasData, $ndsData, $allPrice, $xlstitle, $filename) {
        date_default_timezone_set('Europe/Moscow');

        require_once $admin_path . '/libs/PHPExcel.php';

        $objPHPExcel = new PHPExcel();

        $allLetters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

        $objPHPExcel->getProperties()->setCreator("Praims")
            ->setLastModifiedBy("Praim-S")
            ->setTitle("Office 2007 XLSX Document")
            ->setSubject("Office 2007 XLSX Document")
            ->setDescription("Document for Office 2007 XLSX.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Praim-S");

        $row = 0;

        if (count($headersWorks)>0) {
            $letter = 0;
            $row++;
            foreach ($headersWorks as $_htitle) {
                //echo $allLetters[$letter] . " - " . $row . " - " . $_htitle . "<br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $_htitle);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                    PHPExcel_Style_Fill::FILL_SOLID);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('d6dce5');
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                $letter++;
            }
        }

        $this->setXLSwidth($objPHPExcel);

        if (count($statRecordsWorks)>0)
        {
            $row++;
            $no = 0;
            $letter = 0;
            foreach ($statRecordsWorks as $_itemKey => $_itemValue)
            {
                $no++;
                //$row++;
                $freeCell = 0;
                foreach($headersWorks as $oneCell) {
                    $freeCell++;
                    if ($freeCell == 2) {
                        //echo $allLetters[$letter] . " - " . $row . " - " . $statRecordsWorks[$_itemKey]['title'] . "<br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $statRecordsWorks[$_itemKey]['title']);
                        $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                    } else {
                        //echo $allLetters[$letter] . " - " . $row . " - <br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, '');
                    }
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                        PHPExcel_Style_Fill::FILL_SOLID);
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('ffe699');
                    $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                    $letter++;
                }
                $row++;
                $letter = 0;

                foreach ($statRecordsWorks[$_itemKey]['works'] as $_works) {
                    $setColumn = 0;
                    foreach($_works as $_item) {
                        $setColumn++;
                        //echo $allLetters[$letter] . " - " . $row . " - " . $_item . "<br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $_item);

                        if ($setColumn == 4 || $setColumn == 5 || $setColumn == 6) {
                            $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                        }

                        $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                        $letter++;
                    }
                    $row++;
                    $letter = 0;
                }
            }
        }

        //$row++;
        $freeCell = 0;
        $letter = 0;
        foreach($headersWorks as $oneCell) {
            $freeCell++;
            if ($freeCell == 2) {
                //echo $allLetters[$letter] . " - " . $row . " - Всего работ<br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, 'Работы всего');
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
            } elseif($freeCell == 6) {
                //echo $allLetters[$letter] . " - " . $row . " - " . $allWorks . "<br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $allWorks);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
            } else {
                //echo $allLetters[$letter] . " - " . $row . " - <br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, '');
            }
            $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                PHPExcel_Style_Fill::FILL_SOLID);
            $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('ffe699');
            $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
            $letter++;
        }



        if (count($headersMaterials)>0) {
            $letter = 0;
            $row++;
            foreach ($headersMaterials as $_htitle) {
                //echo $allLetters[$letter] . " - " . $row . " - " . $_htitle . "<br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $_htitle);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                    PHPExcel_Style_Fill::FILL_SOLID);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('d6dce5');
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                $letter++;
            }
        }

        $this->setXLSwidth($objPHPExcel);

        if (count($statRecordsMat)>0)
        {
            $row++;
            $no = 0;
            $letter = 0;
            foreach ($statRecordsMat as $_itemKey => $_itemValue)
            {
                $no++;
                //$row++;
                $freeCell = 0;
                foreach($headersMaterials as $oneCell) {
                    $freeCell++;
                    if ($freeCell == 2) {
                        //echo $allLetters[$letter] . " - " . $row . " - " . $statRecordsMat[$_itemKey]['title'] . "<br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $statRecordsMat[$_itemKey]['title']);
                        $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                    } else {
                        //echo $allLetters[$letter] . " - " . $row . " - <br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, '');
                    }
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                        PHPExcel_Style_Fill::FILL_SOLID);
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('ffe699');
                    $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                    $letter++;
                }
                $row++;
                $letter = 0;

                foreach ($statRecordsMat[$_itemKey]['works'] as $_works) {
                    $setColumn = 0;
                    foreach($_works as $_item) {
                        $setColumn++;
                        //echo $allLetters[$letter] . " - " . $row . " - " . $_item . "<br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $_item);

                        if ($setColumn == 4 || $setColumn == 5 || $setColumn == 6) {
                            $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                        }

                        $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                        $letter++;
                    }
                    $row++;
                    $letter = 0;
                }
            }
        }

        //$row++;
        $freeCell = 0;
        $letter = 0;
        foreach($headersMaterials as $oneCell) {
            $freeCell++;
            if ($freeCell == 2) {
                //echo $allLetters[$letter] . " - " . $row . " - Материалы всего<br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, 'Материалы всего');
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
            } elseif($freeCell == 6) {
                //echo $allLetters[$letter] . " - " . $row . " - " . $allMaterials . "<br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $allMaterials);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
            } else {
                //echo $allLetters[$letter] . " - " . $row . " - <br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, '');
            }
            $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                PHPExcel_Style_Fill::FILL_SOLID);
            $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('ffe699');
            $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
            $letter++;
        }

        if (count($nakData)>0) {
            $row++;
            $freeCell = 0;
            $letter = 0;
            foreach($headersMaterials as $oneCell) {
                $freeCell++;
                if ($freeCell == 2) {
                    //echo $allLetters[$letter] . " - " . $row . " - Накладные расходы " . $nakData['nak_percent'] . "%<br>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, 'Накладные расходы ' . $nakData['nak_percent'] . '%');
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                } elseif($freeCell == 6) {
                    //echo $allLetters[$letter] . " - " . $row . " - " . $nakData['nak_amount'] . "<br>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $nakData['nak_amount']);
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                } else {
                    //echo $allLetters[$letter] . " - " . $row . " - <br>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, '');
                }
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                    PHPExcel_Style_Fill::FILL_SOLID);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('ffe699');
                $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                $letter++;
            }
        }

        if (count($rasData)>0) {
            $row++;
            $freeCell = 0;
            $letter = 0;
            foreach($headersMaterials as $oneCell) {
                $freeCell++;
                if ($freeCell == 2) {
                    //echo $allLetters[$letter] . " - " . $row . " - Расходные материалы " . $rasData['ras_percent'] . "%<br>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, 'Расходные материалы ' . $rasData['ras_percent'] . '%');
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                } elseif($freeCell == 6) {
                    //echo $allLetters[$letter] . " - " . $row . " - " . $rasData['ras_amount'] . "<br>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $rasData['ras_amount']);
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                } else {
                    //echo $allLetters[$letter] . " - " . $row . " - <br>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, '');
                }
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                    PHPExcel_Style_Fill::FILL_SOLID);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('ffe699');
                $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                $letter++;
            }
        }

        if (count($ndsData)>0) {
            $row++;
            $freeCell = 0;
            $letter = 0;
            foreach($headersMaterials as $oneCell) {
                $freeCell++;
                if ($freeCell == 2) {
                    //echo $allLetters[$letter] . " - " . $row . " - НДС (" . $ndsData['vat_percent'] . "%)<br>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, 'НДС (' . $ndsData['vat_percent'] . '%)');
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                } elseif($freeCell == 6) {
                    //echo $allLetters[$letter] . " - " . $row . " - " . $ndsData['vat_amount'] . "<br>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $ndsData['vat_amount']);
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                } else {
                    //echo $allLetters[$letter] . " - " . $row . " - <br>";
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, '');
                }
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                    PHPExcel_Style_Fill::FILL_SOLID);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('ffe699');
                $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                $letter++;
            }
        }

        $row++;
        $freeCell = 0;
        $letter = 0;
        foreach($headersMaterials as $oneCell) {
            $freeCell++;
            if ($freeCell == 2) {
                //echo $allLetters[$letter] . " - " . $row . " - Итого<br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, 'Итого');
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
            } elseif($freeCell == 6) {
                //echo $allLetters[$letter] . " - " . $row . " - " . $allPrice . "<br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $allPrice);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
            } else {
                //echo $allLetters[$letter] . " - " . $row . " - <br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, '');
            }
            $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                PHPExcel_Style_Fill::FILL_SOLID);
            $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('ffe699');
            $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
            $letter++;
        }




        $objPHPExcel->getActiveSheet()->setTitle($xlstitle);

        $objPHPExcel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }

    function exportXLSforPrimePrice ($admin_path, $headersWorks, $statRecordsWorks, $statRecordsMat, $xlstitle, $filename) {
        date_default_timezone_set('Europe/Moscow');

        require_once $admin_path . '/libs/PHPExcel.php';

        $objPHPExcel = new PHPExcel();

        $allLetters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

        $objPHPExcel->getProperties()->setCreator("Praims")
            ->setLastModifiedBy("Praim-S")
            ->setTitle("Office 2007 XLSX Document")
            ->setSubject("Office 2007 XLSX Document")
            ->setDescription("Document for Office 2007 XLSX.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Praim-S");

        $row = 0;

        if (count($headersWorks)>0) {
            $letter = 0;
            $row++;
            foreach ($headersWorks as $_htitle) {
                //echo $allLetters[$letter] . " - " . $row . " - " . $_htitle . "<br>";
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $_htitle);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                    PHPExcel_Style_Fill::FILL_SOLID);
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('d6dce5');
                $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                $letter++;
            }
        }

        $this->setXLSwidthPrice($objPHPExcel);

        if (count($statRecordsWorks)>0)
        {
            $row++;
            $no = 0;
            $letter = 0;
            foreach ($statRecordsWorks as $_itemKey => $_itemValue)
            {
                $no++;
                //$row++;
                $freeCell = 0;
                foreach($headersWorks as $oneCell) {
                    $freeCell++;
                    if ($freeCell == 2) {
                        //echo $allLetters[$letter] . " - " . $row . " - " . $statRecordsWorks[$_itemKey]['title'] . "<br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $statRecordsWorks[$_itemKey]['title']);
                        $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                    } else {
                        //echo $allLetters[$letter] . " - " . $row . " - <br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, '');
                    }
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                        PHPExcel_Style_Fill::FILL_SOLID);
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('ffe699');
                    $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                    $letter++;
                }
                $row++;
                $letter = 0;

                foreach ($statRecordsWorks[$_itemKey]['works'] as $_works) {
                    $setColumn = 0;
                    foreach($_works as $_item) {
                        $setColumn++;
                        //echo $allLetters[$letter] . " - " . $row . " - " . $_item . "<br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $_item);

                        if ($setColumn == 4) {
                            $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                        }

                        $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                        $letter++;
                    }
                    $row++;
                    $letter = 0;
                }
            }
        }

        $this->setXLSwidthPrice($objPHPExcel);

        if (count($statRecordsMat)>0)
        {
            $row++;
            $no = 0;
            $letter = 0;
            foreach ($statRecordsMat as $_itemKey => $_itemValue)
            {
                $no++;
                //$row++;
                $freeCell = 0;
                foreach($headersWorks as $oneCell) {
                    $freeCell++;
                    if ($freeCell == 2) {
                        //echo $allLetters[$letter] . " - " . $row . " - " . $statRecordsMat[$_itemKey]['title'] . "<br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $statRecordsMat[$_itemKey]['title']);
                        $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFont()->setBold(true);
                    } else {
                        //echo $allLetters[$letter] . " - " . $row . " - <br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, '');
                    }
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->setFillType(
                        PHPExcel_Style_Fill::FILL_SOLID);
                    $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getFill()->getStartColor()->setRGB('ffe699');
                    $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                    $letter++;
                }
                $row++;
                $letter = 0;

                foreach ($statRecordsMat[$_itemKey]['works'] as $_works) {
                    $setColumn = 0;
                    foreach($_works as $_item) {
                        $setColumn++;
                        //echo $allLetters[$letter] . " - " . $row . " - " . $_item . "<br>";
                        $objPHPExcel->setActiveSheetIndex(0)->setCellValue($allLetters[$letter] . $row, $_item);

                        if ($setColumn == 4 || $setColumn == 5 || $setColumn == 6) {
                            $objPHPExcel->getActiveSheet()->getStyle($allLetters[$letter] . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                        }

                        $this->XLSborders($objPHPExcel, $allLetters[$letter] . $row);
                        $letter++;
                    }
                    $row++;
                    $letter = 0;
                }
            }
        }


        $objPHPExcel->getActiveSheet()->setTitle($xlstitle);

        $objPHPExcel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }


    function _sendMail($messageToSend, $subjectSend, $mailFrom, $mailTo) {
        global $message, $mailer;
        $message->setSubject($subjectSend);
        $message->setFrom($mailFrom);
        $message->setTo($mailTo);
        $message->setBody($messageToSend);
        $mailer->send($message);
    }

	function ControlForm($post_data, $req_data)
	{
		if (count($req_data)!=0) {
			foreach($req_data as $check_value) {
				if ($post_data[$check_value]=="" || (is_numeric($post_data[$check_value]) && $post_data[$check_value]==0)) {
                    return TRUE;
				}
			}
			return FALSE;
		} else {
            return TRUE;
        }
	}

	function UpdateBase($dbtable, $data, $where, $debug=0)
	{
		global $db;
//		print_r($data);
		if ($dbtable)
		{
			if (count($data)!=0)
			{
				if ($where)
				{
					$sql_query="UPDATE ".$dbtable." SET ";
					$set_vars="";
					foreach ($data as $key => $value)
					{
						if ($key=="msort" && $value=="-1")
							$set_vars.="`msort`=msort-1, ";
                        elseif ($key == "regdate" && $value == "NOW()")
                            $set_vars .= "`regdate`=NOW(), ";
						else
							$set_vars.="`".$key."`='".$value."', ";
					}
					$set_vars=substr($set_vars, 0, -2);
					$where_clause=" WHERE ".$where;
					$sql_query=$sql_query.$set_vars.$where_clause;
                    if ($debug == 1)
					    echo $sql_query;
					if ($db->exec($sql_query))
						return true;
					else
						return false;
				}
				else
					return false;
			}
			else
				return false;
		}
		else
			return false;
	}

	function InsertBase($dbtable, $data, $sort=0, $select='')
	{
		global $db;
		if ($dbtable)
		{
			if (count($data)!=0)
			{
				if ($select!='')
				{
					$search_val = $select;
					if ($sort==1)
						$last_sort_id=$db->getOne("SELECT MAX(msort) FROM $dbtable WHERE $search_val")+1;
				}
				else
				{
					if ($sort==1)
						$last_sort_id=$db->getOne("select MAX(msort) FROM $dbtable")+1;
				}
				$sql_query="INSERT INTO ".$dbtable." VALUES (NULL, ";
				$set_vars="";
				foreach ($data as $key => $value)
				{
					if ($sort==1 && $key=="msort")
						$set_vars.="'$last_sort_id', ";
                    elseif ($key == "regdate" && $value == "NOW()")
                        $set_vars .= "NOW(), ";
                    else
						$set_vars.="'$value', ";
				}
				$set_vars=substr($set_vars, 0, -2);
				$sql_query=$sql_query.$set_vars.")";
				//echo $sql_query;
				if ($db->exec($sql_query))
					return true;
				else
					return false;
			}
			else
				return false;
		}
		else
			return false;
	}

	function DelBase($dbtable, $where, $plusDb=array(), $type='', $path='', $im_thumb=0)
	{
		global $db;
		if ($dbtable)
		{
			if ($where)
			{
				if ($type=="image")
				{
					$sql_select_query="SELECT image from ".$dbtable." WHERE ".$where;
					$result=$db->getOne($sql_select_query);
					if ($im_thumb==1)
					{
						if (unlink($path.$result) && unlink($path."thumb/".$result))
						{
							$sql_query="DELETE FROM ".$dbtable." WHERE ".$where;
							//echo $sql_query;
                            if (is_array($plusDb) && count($plusDb)>0) {
                                foreach ($plusDb as $oneDb) {
                                    $db->exec("DELETE FROM " . trim($oneDb) . " WHERE " . $where);
                                }
                            }

                            if ($db->exec($sql_query))
								return true;
							else
								return false;
						}
						else
							return false;
					}
					else
					{
						if (unlink($path.$result))
						{
							$sql_query="DELETE FROM ".$dbtable." WHERE ".$where;
							//echo $sql_query;
                            if (is_array($plusDb) && count($plusDb)>0) {
                                foreach ($plusDb as $oneDb) {
                                    $db->exec("DELETE FROM " . trim($oneDb) . " WHERE " . $where);
                                }
                            }

                            if ($db->exec($sql_query))
								return true;
							else
								return false;
						}
						else
							return false;
					}
				}
				else
				{
					$sql_query="DELETE FROM ".$dbtable." WHERE ".$where;
					//echo $sql_query;
                    if (is_array($plusDb) && count($plusDb)>0) {
                        foreach ($plusDb as $oneDb) {
                            $db->exec("DELETE FROM " . trim($oneDb) . " WHERE " . $where);
                        }
                    }
                    if ($db->exec($sql_query))
						return true;
					else
						return false;
				}
			}
			else
				return false;
		}
		else
			return false;
	}

	function ControlImage ($file, $allow_filesize, $width, $height='', $reason='')
	{
		if (is_uploaded_file($file))
		{
			$filetype=getimagesize($file);
            if (filesize($file)>$allow_filesize)
                return false;
            else
            {
                if ($reason=="less")
                {
                    if ($filetype[0]<$width)
                        return false;
                    else
                    {
                        if ($height!='')
                        {
                            if ($filetype[1]<$height)
                                return false;
                            else
                                return true;
                        }
                        else
                            return true;
                    }
                }
                else
                {
                    if ($filetype[0]>$width)
                        return false;
                    else
                    {
                        if ($height!='')
                        {
                            if ($filetype[1]>$height)
                                return false;
                            else
                                return true;
                        }
                        else
                            return true;
                    }
                }
            }
		}
		else
			return false;
	}

	function ChangeStatus($dbtable, $id_name, $id, $act, $plusDb=array(), $subid=0)
	{
		global $db;
		if ($subid!=0)
			$ch_id=$subid;
		else
			$ch_id=$id;
		if ($act=="deact") {
            $query = "update " . $dbtable . " set active='0' where " . $id_name . "='" . $ch_id . "'";
            if (is_array($plusDb) && count($plusDb)>0) {
                foreach ($plusDb as $oneDb) {
                    $db->exec("UPDATE " . trim($oneDb) . " SET active='0' WHERE " . $id_name . "='"
                        . $ch_id . "'");
                }
            }
        }
		else {
            $query = "update " . $dbtable . " set active='1' where " . $id_name . "='" . $ch_id . "'";
            if (is_array($plusDb) && count($plusDb)>0) {
                foreach ($plusDb as $oneDb) {
                    $db->exec("UPDATE " . trim($oneDb) . " SET active='1' WHERE " . $id_name . "='"
                        . $ch_id . "'");
                }
            }
        }
	    $db->exec($query);
	}


    function createThumb($image, $srcFile, $filename, $width, $height) {
        $_thumbDir = _SERVER_ROOT . '/content/_th/';
        if ($width != '' && $height != '') {
            $thumbSizeDir = $width . 'x' . $height;
        } else {
            $thumbSizeDir = 'unknown';
        }
        $newDir = $_thumbDir . $thumbSizeDir . '/';
        if(!is_dir($newDir)) {
            if(!mkdir($newDir, 0777, true)) {
                return false;
            }
        }
        $newFile = $newDir . $filename;
        if (is_file($newFile)) {
            return true;
        } else {
            if ($this->SaveResizeImage ($image, $srcFile, $newFile, 'best_fit', $width, $height) === true) {
                return true;
            } else {
                return false;
            }
        }

    }

    /**
     * @param $image - класс
     * @param $srcImage - Source image
     * @param $destImage - Final Destination
     * @param string $resizeType - Тип изменения изображения
     * @param string $resizeWidth - ширина
     * @param string $resizeHeight - высота
     * @return bool
     */
    function SaveResizeImage ($image, $srcImage, $destImage, $resizeType='width', $resizeWidth='', $resizeHeight='') {
        $image->load($srcImage);
        $width = $image->get_width();
        $height = $image->get_height();
        switch ($resizeType) {
            case 'height':
                if ($resizeHeight<$height)
                    $image->fit_to_height($resizeHeight);
                break;
            case 'width':
                if ($resizeWidth<$width)
                    $image->fit_to_width($resizeWidth);
                break;
            case 'both':
                if ($resizeWidth<$width && $resizeHeight<$height)
                    $image->resize($resizeWidth, $resizeHeight);
                break;
            case 'best_fit_original':
                $image->best_fit($resizeWidth, $resizeHeight);
                break;
            case 'best_fit':
                $fit_to_width = $image->fit_to_width($resizeWidth);
                $new_h = $fit_to_width->get_height();
                if ($new_h>=$resizeHeight) {
                    $x1 = 0;
                    $x2 = $resizeWidth;
                    $y1 = ($new_h/2) - ($resizeHeight/2);
                    $y2 = $y1 + $resizeHeight;
                } else {
                    $fit_to_height = $image->fit_to_height($resizeHeight);
                    $new_w = $fit_to_height->get_width();
                    if ($new_w>=$resizeWidth) {
                        $y1 = 0;
                        $y2 = $resizeHeight;
                        $x1 = ($new_w/2) - ($resizeWidth/2);
                        $x2 = $x1 + $resizeWidth;
                    } else {
                        $x1 = 0;
                        $y1 = 0;
                        $x2 = $resizeWidth;
                        $y2 = $resizeHeight;
                    }
                }
                $image = $fit_to_width->crop($x1, $y1, $x2, $y2);
                break;
            default:
                $image->resize($resizeWidth, $resizeHeight);
                break;
        }
        $image->save($destImage);
        if (is_file($destImage))
            return true;
        else
            return false;
    }

    /**
     * @param $type - тип контента: slider, photo, video
     * @param $section - секция: main, pages
     * @param string $media_name - если слайдер, то название слайдера
     * @return array - возвращаем массив с названиями файлов (slider, image) или кодом если видео
     */
    function mediaContent ($type, $section, $media_name='') {
        global $db;
        $_contArray = array();
        if ($media_name != '') {
            $where_ = " AND media_name='" . $media_name . "'";
        } else {
            $where_ = "";
        }
        $_content = $db->getAll("SELECT * FROM media WHERE section='" . $section . "' AND type='" . $type . "' AND active='1'" . $where_);
        if ($_content) {
            foreach ($_content as $_file) {
                $_contArray[] = $_file['content'];
            }
        }
        return $_contArray;
    }

    function translit($str)
    {
        $tr = array(
            'А'=>'A','Б'=>'B','В'=>'V','Г'=>'G',
            'Д'=>'D','Е'=>'E','Ё'=>'E','Ж'=>'J','З'=>'Z','И'=>'I',
            'Й'=>'Y','К'=>'K','Л'=>'L','М'=>'M','Н'=>'N',
            'О'=>'O','П'=>'P','Р'=>'R','С'=>'S','Т'=>'T',
            'У'=>'U','Ф'=>'F','Х'=>'H','Ц'=>'TS','Ч'=>'CH',
            'Ш'=>'SH','Щ'=>'SCH','Ъ'=>'','Ы'=>'Y','Ь'=>'',
            'Э'=>'E','Ю'=>'YU','Я'=>'YA','а'=>'a','б'=>'b',
            'в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j',
            'з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l',
            'м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r',
            'с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h',
            'ц'=>'ts','ч'=>'ch','ш'=>'sh','щ'=>'sch','ъ'=>'y',
            'ы'=>'y','ь'=>'','э'=>'e','ю'=>'yu','я'=>'ya', ' ' => '-'
        );
        return strtr($str,$tr);
    }

    function generateUrl ($dbtable, $title, $origTitle = '', $i = 0, $editUrl = '') {
        global $db;
        $title = preg_replace ("/[^a-zA-ZА-ЯЁёа-я0-9\s]/u","-",trim($title));
        $url = $this->translit(trim($title));
        $checkQuery = 1;
        if ($editUrl) {
            if ($editUrl == $url) {
                $checkQuery = 0;
            }
        }
        if ($checkQuery == 1) {
            $checkUrl = $db->getOne("SELECT url FROM " . $dbtable . " WHERE url='" . $url . "'");
            if ($checkUrl) {
                $i++;
                if ($origTitle) {
                    $url = $this->translit($origTitle) . '-' . $i;
                    $newUrl = $this->generateUrl($dbtable, $url, $origTitle, $i);
                } else {
                    $url = $url . '-' . $i;
                    $newUrl = $this->generateUrl($dbtable, $url, $title, $i);
                }
            } else {
                $newUrl = $url;
            }
        } else {
            $newUrl = $url;
        }
        return $newUrl;
    }

    function getCategory ($dbtable, $cid, $returnTitle = '') {
        global $db;
        $catTitle = $db->getRow("SELECT * FROM " . $dbtable . " WHERE id='" . $cid . "'");

        if ($catTitle['parent_id'] != 0) {
            $returnTitle .= $this->getCategory($dbtable, $catTitle['parent_id'], $returnTitle) . ' / ';
        }
        $returnTitle .= $catTitle['title'];
        return $returnTitle;
    }

}
?>
