<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


//use Illuminate\Http\Request;

use App\Illuminate\Http\Requests\ClientRequest;



use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class ClientController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('can:client list', ['only' => ['index', 'show']]);
        $this->middleware('can:client create', ['only' => ['create', 'store']]);
        $this->middleware('can:client edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:client delete', ['only' => ['destroy']]);
    }


    public function index(){

        $clients = (new Client)->newQuery();

        if (request()->has('search')) {
            $clients->where('name', 'Like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $clients->orderBy($attribute, $sort_order);
        } else {
            $clients->latest();
        }

        $clients = $clients->paginate(5)->onEachSide(2)->appends(request()->query());

        return Inertia::render('Admin/Clients/Index', [
            'clients' => $clients,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('permission create'),
                'edit' => Auth::user()->can('permission edit'),
                'delete' => Auth::user()->can('permission delete'),
            ]
        ]);


    }


    public function create()
    {
        return Inertia::render('Admin/Clients/Create');
    }


    public function store(ClientRequest $request, CreateUser $createUser)
    {
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('client.index')
                        ->with('message', 'Client created successfully.');
    }
}
