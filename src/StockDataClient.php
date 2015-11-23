<?php namespace davidpiesse\stockdata;

class StockDataClient
{
    //all the functions to get data in a laravel sort of way
//    protected $client = new Schub
    private static $client;
    //pass in single string or array
    public static function getStockList($stocks){
        $client = new \Scheb\YahooFinanceApi\ApiClient();
        return colect($client->getQuotesList($stocks));
    }

}