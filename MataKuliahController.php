
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController
class MatakuliahController extends Controller
{
/**
    * Display a listing of the resource.
@@ -22,7 +22,7 @@ public function index()
    */
public function create()
{
        return view('mata_kuliah.create');
        return view('matakuliah.create');
}

/**
@@ -50,7 +50,7 @@ public function show($id)
    */
public function edit($id)
{
        return view('mata_kuliah.edit', [
        return view('Matakuliah.edit', [
'mata_kuliah' => Matakuliah::find($id)
]);
}