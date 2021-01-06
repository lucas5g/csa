<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Sheets;
// require __DIR__ . '/vendor/autoload.php';

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index', [
            'test' => 'ola'
        ]);
    }

    public function test()
    {


        $client = new \Google_Client();
        $client->setApplicationName('Google Sheets API PHP Quickstart');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        $client->setAuthConfig(env('GOOGLE_SERVICE_ACCOUNT_JSON_LOCATION'));

        $service = new Google_Service_Sheets($client);

        // return file_get_contents(env('GOOGLE_SERVICE_ACCOUNT_JSON_LOCATION'));

        $spreadsheetId = '1o9wB8zt9O_zX3kBuYyn8QpE-yIiErr0b4baBAVLU3W8';

        $range = 'enturmacao!A2:M';

        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();

        foreach ($values as $row) {
            if ($row[10] == '23' && $row[11] == '3' && $row[0] == 'C005805') {

                $students[] = [
                    'matricula' => $row[0],
                    'nome' => $row[1],
                    'vet_nov' => $row[2],
                    'tur_ant' => $row[3],
                    'sexo' => $row[4],
                    'turno' => $row[5],
                    'situacao' => $row[6],
                    'cidade' => $row[7],
                    'codtun' => $row[8],
                    'media' => $row[9],
                    'codcur' => $row[10],
                    'codper' => $row[11],
                    'escola_origem' => $row[12] ?? '',


                ];
            }
        }
        return [$students, 'qtd'=>sizeof($students)];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
