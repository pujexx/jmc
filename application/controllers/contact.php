<?php

class contact extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('contact_model', ''));
    }

    function index() {
         $this->log->setLog('visitor visited contact page',0);
        $this->load->library('GMap'); //-> memanggil library gmap

        $this->gmap->GoogleMapAPI();
       // $this->gmap->addDirections();
        $this->gmap->setMapType('hybrid'); //-> hybrid, satellite, terrain, map
        $this->gmap->setWidth("100%");
        $this->gmap->setHeight("400px");
       // $this->gmap->setZoomLevel(17);
        $this->gmap->addDirections("nanggulan, kulon progo", "jalan magelang, yogyakarta", 'map_directions', $display_markers=true);
      //  $this->gmap->addDirections("nanggulan kulon progo","jalan Magelang ,yogyakarta",$dom_id='', $add_markers=true, $elevation_samples=256, $elevation_width="", $elevation_height="", $elevation_dom_id='');
       // $this->gmap->addMarkerByAddress("jalan Magelang ,yogyakarta", "Jogja Media Center", "<img src='".base_url()."/template/images/jmc.png' width='200'/> <br>lokasi JMC");
        $this->gmap->disableSidebar();
        $data['headerjs'] = $this->gmap->getHeaderJS();
        $data['setting'] = $this->setting_content_model->get_all_setting();
        $data['headerpeta'] = $this->gmap->getMapJS();
        $data['contact1']= $this->contact_model->get_all();
     
        $data['onload'] = $this->gmap->printOnLoad();
        $data['content']="front/contact";
        $data['peta'] = $this->gmap->printMap();
        $this->load->view('front/template',$data);
    }

}

?>
