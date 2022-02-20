<?php

namespace App\Console\Commands;

use App\Proxy;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;


class everyMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will clean a db table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public function handle()
    {

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://pubproxy.com/api/proxy');
        $responseData = $res->getBody()->getContents();
        $responseData = json_decode($responseData, true);
        $responseData = $responseData['data'][0];

        $proxy = Proxy::where('ip_address', $responseData['ip'])->get()->first();
        if($proxy){
            $proxy->updated_at = date("Y-m-d H:i:s");
        }else {
            $proxy = new Proxy();
            $proxy->created_at = date("Y-m-d H:i:s");
        }

        $proxy->ip_address = $responseData['ip'];
        $proxy->port = $responseData['port'];
        $proxy->country = $responseData['country'];
        $proxy->type = $responseData['type'];
        $proxy->last_checked = $responseData['last_checked'];
        $proxy->proxy_level = $responseData['proxy_level'];

        $proxy->saveOrFail();
    }

}
