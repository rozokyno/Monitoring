<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function runSpeedtest()
    {
        $url = 'https://api.fast.com/netflix/speedtest';
        $response = Http::get($url);
    
        if ($response->ok()) {
            return response()->json([
                'downloadSpeed' => 'Fast.com API test successful',
            ]);
        }
    
        return response()->json(['error' => 'Unable to connect to Fast.com API'], 500);
    }

    private function testSpeed($url)
    {
        $start = microtime(true);

        try {
            Http::timeout(10)->get($url);
        } catch (\Exception $e) {
            return 'Error';
        }

        $end = microtime(true);
        $timeElapsed = $end - $start;

        $speed = (1000000 / $timeElapsed) / 1000000; 
        return round($speed, 2);
    }
    public function checkInternetConnection()
    {
        try {
            $response = Http::timeout(5)->get('https://www.google.com');
            return $response->successful();
        } catch (\Exception $e) {
            return false;
        }
    }
    public function index()
    {
        $internetStatus = $this->checkInternetConnection() ? 'Connected' : 'Disconnected';
        $computers = Computer::all();
        $users = User::all();
        return view('admin.dashboard.index', compact('computers', 'users', 'internetStatus'));
    }
}
