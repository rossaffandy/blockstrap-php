<?php

/*
 * 
 *  Blockstrap PHP SDK v1
 *  http://blockstrap.com
 *
 *  Designed, Developed and Maintained by Neuroware.io Inc
 *  All Work Released Under MIT License
 *  
 */

session_start();

class bs_cache extends blockstrap
{   
    public static $options;

    // INITIATE CLASS
    function __construct($settings = array())
    {
        $this::$options = $this->defaults($settings);
    }

    // SET DEFAULT OPTIONS
    private function defaults($settings = array())
    {
        $defaults = array(
            'ttl' => 60 // 60 seconds equals one minute
        );
        $options = array_merge($defaults, $settings);
        return $options;
    }
    
    // GET CACHED RESULTS
    public function read($key, $term)
    {
        $value = false;

        $now = $this->generateDate();

        if(isset($_SESSION) && isset($_SESSION[$key]))
        {
            $record = json_decode($_SESSION[$key], true);
            if(isset($record['ts']) && isset($record['data']))
            {
                if((int) $record['ts'] + (int) $this::$options['ttl'] < $now)
                {
                    unset($_SESSION[$key]);
                }
                else
                {
                    $value = $record['data'];
                }
            }
        }
        return $value;
    }
    
    // SAVE RESULTS TO CACHE
    public function write($key, $value, $term)
    {
        $now = $this->generateDate();

        $_SESSION[$key] = json_encode(array(
            'ts' => $now,
            'data' => $value
        ));

        return true;
    }

    private function generateDate() {
        $date = new DateTime();
        $now = $date->format('U');
        return $now;
    }
}