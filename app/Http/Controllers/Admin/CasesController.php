<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CasesController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:cases list', ['only' => ['index', 'show']]);
        $this->middleware('can:cases create', ['only' => ['create', 'store']]);
        $this->middleware('can:cases edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:cases delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cases = (new Client)->newQuery();

        if (request()->has('search')) {
            $cases->where('name', 'Like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $cases->orderBy($attribute, $sort_order);
        } else {
            $cases->latest();
        }

        $cases = $cases->paginate(5)->onEachSide(2)->appends(request()->query());

        return Inertia::render('Admin/Cases/Index', [
            'cases' => $cases,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('permission create'),
                'edit' => Auth::user()->can('permission edit'),
                'delete' => Auth::user()->can('permission delete'),
            ]
        ]);

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Admin/Cases/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
