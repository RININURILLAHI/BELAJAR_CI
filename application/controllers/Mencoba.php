<?php
    class Mencoba extends CI_controller{

     function index(){
         echo "index";
     }

     function  latihan(){
       $this->load->view("V_pegawai_Mencoba");
     }

     function user(){
         $this->load->view("V_siswa_Mencoba");
     }

     function data(){
         $this->load->view("V_admin_Mencoba");
     }

     function welcome(){
         $this->load->view("V_anggota_Mencoba");
     }

  

      }