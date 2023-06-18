<!--ini bagian dashboard.blade.php-->
    <form action="/dashboard/search" method="GET">
            <div class="col-7" id="searchbar">
                <input type="text"  id="searchbar" name="cari" placeholder="Search for your favourite destination" value="{{ old('cari') }}">
            </div>

            <div class="col-2" id="searchbar">
                <button type="submit" class="search-btn" id="search-btn">
                    Search
                </button>
      </form>

<!-- ini bagian dashboardController-->
public function cari(Request $request)
	{
        $cari = $request->cari;
        $event = DB::table('event')
		->where('title','like',"%".$cari."%")
		->get();
        return view('resultspage', compact('event'));
	}

<!-- ini bagian web.php, pilih salah satu routenya-->
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
              
Route::get('/dashboard/search', [eventController::class, 'cari']);
              
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard/search', 'cari');
});
