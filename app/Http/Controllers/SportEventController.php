<?php

namespace App\Http\Controllers;

use App\Models\Sports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SportEventController extends Controller
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
        ])->get('https://api-sport-events.php9-01.test.voxteneo.com/api/v1/sport-events');
        
        $jsonData = $response->json();
          
        dd($jsonData);

        Log::info("Request:", [
            "method" => $request->getMethod(),
            "url" => (string) $request->getUri(),
            "headers" => $request->getHeaders(),
            "body" => (string) $request->getBody(),
        ]);


        // $data['sports'] = Sports::orderBy('id', 'desc')->paginate(5);
        // return view('sports.index', $data);
    }
    /**
     * Perlihatkan formulir untuk membuat resource baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sports.create');
    }
    /**
     * Simpan resource yang baru dibuat di penyimpanan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'eventDate' => 'required',
            'eventType' => 'required',
            'eventName' => 'required',
            'organizerId' => 'required',
        ]);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLXNwb3J0LWV2ZW50cy5waHA5LTAxLnRlc3Qudm94dGVuZW8uY29tXC9hcGlcL3YxXC91c2Vyc1wvbG9naW4iLCJpYXQiOjE2OTUwOTE2NTEsImV4cCI6MTY5NTE3ODA1MSwibmJmIjoxNjk1MDkxNjUxLCJqdGkiOiJRanE5YWFKOVlCWVBSaTFZIiwic3ViIjoyMjI4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.DXkFWc069-AXJKBdiILbJoXNToyFgIB_wIoNKW9Q6sM',
        ])->post('https://api-sport-events.php9-01.test.voxteneo.com/api/v1/sport-events',[
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
        // $sport = new Sports;
        // $sport->name = $request->nama;
        // $sport->email = $request->email;
        // $sport->address = str()->slug($request->alamat);
        // // $request->alamat;
        // $sport->save();
        // return redirect()->route('sports.index')
        //     ->with('sukses', 'Sports has been created successfully.');
    }
    /**
     * Menampilkan resource yang ditentukan.
     *
     * @param  \App\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function show(Sports $sport)
    {
        return view('sports.show', compact('Sport'));
    }
    /**
     * Tampilkan formulir untuk mengedit resource yang ditentukan.
     *
     * @param  \App\Sports  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(Sports $sport)
    {
        return view('sports.edit', compact('Sport'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'eventDate' => 'required',
            'eventType' => 'required',
            'eventName' => 'required',
            'organizerId' => 'required',
        ]);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLXNwb3J0LWV2ZW50cy5waHA5LTAxLnRlc3Qudm94dGVuZW8uY29tXC9hcGlcL3YxXC91c2Vyc1wvbG9naW4iLCJpYXQiOjE2OTUwOTE2NTEsImV4cCI6MTY5NTE3ODA1MSwibmJmIjoxNjk1MDkxNjUxLCJqdGkiOiJRanE5YWFKOVlCWVBSaTFZIiwic3ViIjoyMjI4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.DXkFWc069-AXJKBdiILbJoXNToyFgIB_wIoNKW9Q6sM',
        ])->put('https://api-sport-events.php9-01.test.voxteneo.com/api/v1/sport-events/'.$id,[
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
        // $sport = Sports::find($id);
        // $sport->name = $request->nama;
        // $sport->email = $request->email;
        // $sport->address = $request->alamat;
        // $sport->save();
        // return redirect()->route('sports.index')
        //     ->with('sukses', 'Sports Has Been updated successfully');
    }
    /**
     * Hapus resource yang ditentukan dari penyimpanan.
     *
     * @param  \App\Sports  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLXNwb3J0LWV2ZW50cy5waHA5LTAxLnRlc3Qudm94dGVuZW8uY29tXC9hcGlcL3YxXC91c2Vyc1wvbG9naW4iLCJpYXQiOjE2OTUwOTE2NTEsImV4cCI6MTY5NTE3ODA1MSwibmJmIjoxNjk1MDkxNjUxLCJqdGkiOiJRanE5YWFKOVlCWVBSaTFZIiwic3ViIjoyMjI4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.DXkFWc069-AXJKBdiILbJoXNToyFgIB_wIoNKW9Q6sM',
        ])->delete('https://api-sport-events.php9-01.test.voxteneo.com/api/v1/sport-events/'.$id);

        $jsonData = $response->json();

        dd($jsonData);

        // $sport->delete();
        // return redirect()->route('sports.index')
        //     ->with('sukses', 'Sports has been deleted successfully');
    }
}
