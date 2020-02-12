<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;
class MapController extends Controller
{

    public function getMap()
    {
        $config['center'] = 'Yangon';
        $config['zoom'] = '14';
        $config['map_height'] = '400px';

        $gmap = new GMaps();
        $gmap->initialize($config);

        $marker['position'] = 'Yangon';
        $marker['infowindow_content'] = 'Yangon';

        $gmap->add_marker($marker);
        $map = $gmap->create_map();
        return view('welcome',compact('map'));
    }
}
