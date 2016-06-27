<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Helper_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user_videos($id) {
        $video_name = array();
        $path = './videos/';
        $objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
        foreach ($objects as $fileinfo) {
            if ($fileinfo->isFile()) {
                $regexp = "/^" . $id . "*[_]+(.*)$/";
                $name = $fileinfo->getFilename();
                if (preg_match($regexp, $name)) {
                    array_push($video_name, $name);
                }
            }
        }
        return $video_name;
    }

}
