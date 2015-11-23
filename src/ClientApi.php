<?php namespace davidpiesse\stockdata;

class ClientApi
{
    //all the functions to get data in a laravel sort of way
//    protected $client = new Schub

    //pass in single string or array
    public static function getStockList($stocks){
        $client = Scheb\YahooFinanceApi\ApiClient();
        return colect($client->getQuotesList($stocks));
    }

}