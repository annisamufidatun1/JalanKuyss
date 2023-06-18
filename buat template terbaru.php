<!-- buat EventController -->
public function randomEvent(Request $request)
    {
        $randomEvent = Event::inRandomOrder()->first(); // Get a random event from the database

        return view('event.modal', compact('randomEvent'));
    }

<!-- web.php-->
Route::get('/random-event', [EventController::class, 'randomEvent'])->name('random-event');
