<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Paciente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Paciente::create($request->all());
    }

    /**
     * Display the specified resource.
     */
public function show(string $id)
{
return Paciente::findOrFail($id);
}

public function update(Request $request, string $id)
{
$paciente = Paciente::findOrFail($id);

```
$paciente->fill($request->all());
$paciente->save();

return $paciente;
```
}
}



public function destroy(string $id)
{
$paciente = Paciente::findOrFail($id);

```
$paciente->delete();

return response()->json([
    'mensaje' => 'Paciente eliminado correctamente'
]);
```

}
