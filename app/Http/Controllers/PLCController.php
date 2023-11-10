<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlcItem;
use Illuminate\Support\Facades\DB;

class PLCController extends Controller
{
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

        //$plcData = [];

        /*
        for ($i = 1; $i <= 50; $i++) {
            $plcData[] = [
                'title' => 'PLC Item ' . $i,
                'description' => 'Description for PLC Item ' . $i . '.',
                'price' => rand(100, 1000), // Random price between 100 and 1000
                'supplier' => 'Supplier ' . $i,
                'link' => '/'
            ];
        }
        */

        // Retrieve all records from the plc_items table
        //$plcItems = PlcItem::all();
        // Retrieve all records from the plc_items table
        /*
        $plcItems = PlcItem::all();
    
        $perPage = 30;
        $page = request()->get('page', 1);
        $offset = ($page - 1) * $perPage;
    
        $currentPageItems = array_slice( $plcItems, $offset, $perPage);
    
        $totalItems = count( $plcItems);
        $lastPage = ceil($totalItems / $perPage);
    
        return view('clientplc', compact('currentPageItems', 'page', 'lastPage'));
        */

        // Define the number of items per page
// Retrieve all records from the plc_items table
$plcItems = PlcItem::all();

// Define the number of items per page
$perPage = 30;

// Retrieve the current page number from the request, default to 1
$page = request()->get('page', 1);

// Calculate the offset based on the current page and items per page
$offset = ($page - 1) * $perPage;

// Slice the array to get the current page items
$currentPageItems = array_slice($plcItems->toArray(), $offset, $perPage);

// Count total items
$totalItems = count($plcItems);

// Calculate the last page
$lastPage = ceil($totalItems / $perPage);

return view('clientplc', compact('currentPageItems', 'page', 'lastPage'));


    }
}
