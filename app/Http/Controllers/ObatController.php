<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listobat;


class ObatController extends Controller
{
    private $listobat;

    public function __construct ()
    {
        $this->listobat = new Listobat;
    }
    public function index ()
    {
        return view ('card', [
            'listobat' => $this->listobat->all()
        ]);
    }
    public function show ($id)
    {
        return view ('carddetail', [
            'listobat' => $this->listobat->find($id)
        ]);
    }
}
