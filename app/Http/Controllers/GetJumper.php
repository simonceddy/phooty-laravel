<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetJumper extends Controller
{
    private function getRandVal()
    {
        return mt_rand(0, 255);
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $num = mt_rand(2, 4);
        //

        $rgb = [];

        for ($i=0; $i < $num; $i++) {
            $rgb[] = [
                'r' => $this->getRandVal(),
                'g' => $this->getRandVal(),
                'b' => $this->getRandVal(),
            ];
        }

        // dd(json_encode($rgb));

        return view('jumper', [
            'colours' => $rgb,
        ]);
    }
}
