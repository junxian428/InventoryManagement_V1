<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PneumaticsController extends Controller
{
    //
     //
     //
     public function index()
     {
         /*
         $plcData = [
             [
                 'title' => 'PLC Item 1',
                 'description' => 'Description for PLC Item 1.',
                 'link' => '/'
             ],
             [
                 'title' => 'PLC Item 2',
                 'description' => 'Description for PLC Item 2.',
                 'link' => ''
             ],
         
             // Add more items as needed...
         ];
         */
 
         $plcData = [];
 
         for ($i = 1; $i <= 50; $i++) {
             $plcData[] = [
                 'title' => 'Pneumatics Item ' . $i,
                 'description' => 'Description for Pneumatics Item ' . $i . '.',
                 'price' => rand(100, 1000), // Random price between 100 and 1000
                 'supplier' => 'Supplier ' . $i,
                 'link' => '/'
             ];
         }
         
     
         $perPage = 30;
         $page = request()->get('page', 1);
         $offset = ($page - 1) * $perPage;
     
         $currentPageItems = array_slice($plcData, $offset, $perPage);
     
         $totalItems = count($plcData);
         $lastPage = ceil($totalItems / $perPage);
     
         return view('clientpneumatics', compact('currentPageItems', 'page', 'lastPage'));
     }
}
