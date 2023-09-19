<?php

namespace App\Http\Controllers;

use App\Models\Organizers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrganizerController extends Controller
{
    /**
     * Menampilkan daftar resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLXNwb3J0LWV2ZW50cy5waHA5LTAxLnRlc3Qudm94dGVuZW8uY29tXC9hcGlcL3YxXC91c2Vyc1wvbG9naW4iLCJpYXQiOjE2OTUwOTE2NTEsImV4cCI6MTY5NTE3ODA1MSwibmJmIjoxNjk1MDkxNjUxLCJqdGkiOiJRanE5YWFKOVlCWVBSaTFZIiwic3ViIjoyMjI4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.DXkFWc069-AXJKBdiILbJoXNToyFgIB_wIoNKW9Q6sM',
        ])->get('https://api-sport-events.php9-01.test.voxteneo.com/api/v1/organizers');
        
        $jsonData = $response->json();
          
        dd($jsonData);

        // $data['sports'] = Organizers::orderBy('id', 'desc')->paginate(5);
        // return view('organizers.index', $data);
    }
    /**
     * Perlihatkan formulir untuk membuat resource baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organizers.create');
    }
    /**
     * Simpan resource yang baru dibuat di penyimpanan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLXNwb3J0LWV2ZW50cy5waHA5LTAxLnRlc3Qudm94dGVuZW8uY29tXC9hcGlcL3YxXC91c2Vyc1wvbG9naW4iLCJpYXQiOjE2OTUwOTE2NTEsImV4cCI6MTY5NTE3ODA1MSwibmJmIjoxNjk1MDkxNjUxLCJqdGkiOiJRanE5YWFKOVlCWVBSaTFZIiwic3ViIjoyMjI4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.DXkFWc069-AXJKBdiILbJoXNToyFgIB_wIoNKW9Q6sM',
        ])->post('https://api-sport-events.php9-01.test.voxteneo.com/api/v1/organizers',[
            'eventDate' => '2023-09-19',
            'eventType' => 'string',
            'eventName' => 'string',
            'organizerId'=> 361
        ]);

        $jsonData = $response->json();

        dd($jsonData);


        // $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'alamat' => 'required'
        // ]);
        // $organizer = new Organizers;
        // $organizer->name = $request->nama;
        // $organizer->email = $request->email;
        // $organizer->address = str()->slug($request->alamat);
        // // $request->alamat;
        // $organizer->save();
        // return redirect()->route('organizers.index')
        //     ->with('sukses', 'Organizers has been created successfully.');
    }
    /**
     * Menampilkan resource yang ditentukan.
     *
     * @param  \App\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function show(Organizers $organizer)
    {
        return view('organizers.show', compact('Organizer'));
    }
    /**
     * Tampilkan formulir untuk mengedit resource yang ditentukan.
     *
     * @param  \App\Organizers  $organizer
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizers $organizer)
    {
        return view('organizers.edit', compact('Organizer'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLXNwb3J0LWV2ZW50cy5waHA5LTAxLnRlc3Qudm94dGVuZW8uY29tXC9hcGlcL3YxXC91c2Vyc1wvbG9naW4iLCJpYXQiOjE2OTUwOTE2NTEsImV4cCI6MTY5NTE3ODA1MSwibmJmIjoxNjk1MDkxNjUxLCJqdGkiOiJRanE5YWFKOVlCWVBSaTFZIiwic3ViIjoyMjI4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.DXkFWc069-AXJKBdiILbJoXNToyFgIB_wIoNKW9Q6sM',
        ])->put('https://api-sport-events.php9-01.test.voxteneo.com/api/v1/organizers/'.$id,[
            'eventDate' => '2023-09-19',
            'eventType' => 'string',
            'eventName' => 'string',
            'organizerId'=> 361
        ]);

        $jsonData = $response->json();

        dd($jsonData);


        // $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'alamat' => 'required',
        // ]);
        // $organizer = Organizers::find($id);
        // $organizer->name = $request->nama;
        // $organizer->email = $request->email;
        // $organizer->address = $request->alamat;
        // $organizer->save();
        // return redirect()->route('organizers.index')
        //     ->with('sukses', 'Organizers Has Been updated successfully');
    }
    /**
     * Hapus resource yang ditentukan dari penyimpanan.
     *
     * @param  \App\Organizers  $organizer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLXNwb3J0LWV2ZW50cy5waHA5LTAxLnRlc3Qudm94dGVuZW8uY29tXC9hcGlcL3YxXC91c2Vyc1wvbG9naW4iLCJpYXQiOjE2OTUwOTE2NTEsImV4cCI6MTY5NTE3ODA1MSwibmJmIjoxNjk1MDkxNjUxLCJqdGkiOiJRanE5YWFKOVlCWVBSaTFZIiwic3ViIjoyMjI4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.DXkFWc069-AXJKBdiILbJoXNToyFgIB_wIoNKW9Q6sM',
        ])->delete('https://api-sport-events.php9-01.test.voxteneo.com/api/v1/organizers/'.$id);

        $jsonData = $response->json();

        dd($jsonData);

        // $organizer->delete();
        // return redirect()->route('organizers.index')
        //     ->with('sukses', 'Organizers has been deleted successfully');
    }
}
