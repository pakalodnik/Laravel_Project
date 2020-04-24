<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WordTestController extends Controller
{
    public function createWordDocx()
    {
        $desc = 'Privet';
        //$downloads = DB::table('publications')->get();
        $wordTest = new \PhpOffice\PhpWord\PhpWord();
        $newSection = $wordTest->addSection();
        $newSection->addText($desc);
        $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');
        try{
            $objectWriter->save(resource_path('TestWordFile.docx'));
        } catch (\Exception $e){
            return response()->download(resource_path('TestWordFile.docx'));
        }
    }
}
