<?php

namespace App\Services;

class Google_Service_Sheets
{
    private $spreadSheetId;

    private $client;

    private $googleSheetService;

    public function __construct()
    {
        $this->spreadSheet = config(key: 'datastudio.google_sheet_id');

        $this->client = new Google_client
    }
}