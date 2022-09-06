<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function xml_1()
    {
        $ppk2_xml_1 = file_get_contents('https://rss.tempo.co/bisnis');
        $json_1 = simplexml_load_string($ppk2_xml_1);
        $data['ppk2_xml_1'] = $json_1;
        return view('xml-1/index', $data);
    }

    public function xml_2()
    {
        $ppk2_xml_2 = file_get_contents('https://www.cnnindonesia.com/ekonomi/rss');
        $json_2 = simplexml_load_string($ppk2_xml_2);
        $data['ppk2_xml_2'] = $json_2;
        return view('xml-2/index', $data);
    }

    public function xml_3()
    {
        $ppk2_xml_3 = file_get_contents('https://www.republika.co.id/rss');
        $json_3 = simplexml_load_string($ppk2_xml_3);
        $data['ppk2_xml_3'] = $json_3;
        return view('xml-3/index', $data);
    }

    public function json_portal()
    {
        $ppk2_json_portal = file_get_contents('https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json');
        $json_portal = json_decode($ppk2_json_portal, true);
        // get last 15 data
        $data['ppk2_json_portal'] = $json_portal;
        // $data['berita_json_portal'] = $json_portal;
        return view('json/index', $data);
    }
}