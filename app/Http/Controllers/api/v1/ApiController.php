<?php
namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function __invoke() : array
    {
        return [
            'success' => true,
            'message' => 'Welcome to the API',
            'data' => [
                'Service' => 'API DEFAULT STRUCTURE FOLDER',
                'version' => '1.0.0',
                'author' => 'GATO JUNIOR',
                'email' => 'contact@gatojunior.co',
                'github' => 'https://github.com/FulbertGato',
                'language' => 'French',
            ]

        ];
    }

}


