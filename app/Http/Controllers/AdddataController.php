<?php

namespace App\Http\Controllers;

use App\Models\Bois;
use App\Models\Company;
use App\Models\Branch;
use App\Models\Segment;
use App\Models\Costcenter;
use App\Models\Intercompany;
use App\Models\Project;
use App\Models\Product;
use App\Models\Reserve;
use App\Models\Employee;
use App\Models\Type;
use Illuminate\Http\Request;

class AdddataController extends Controller
{
    public function index()
    {
        
        $bois = Bois::all();
        $company = Company::all();
        $branch = Branch::all();
        $segment = Segment::all();
        $costcenter = Costcenter::all();
        $intercompany =Intercompany::all();
        $project = Project::all();
        $product = Product::all();
        $reserve = Reserve::all();
        $employee = Employee::all();
        $type = Type::all();

        return view('adddata', compact(['bois','company','branch','segment','costcenter','intercompany','project','product','reserve','employee','type']));
        
    }
}
