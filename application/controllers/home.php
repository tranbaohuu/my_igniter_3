<?php
/**
 * Created by PhpStorm.
 * User: tranbaohuu
 * Date: 5/18/2015
 * Time: 9:43 PM
 */

 class Home extends  CI_Controller
{


   public function  __construct()
    {
        parent:: __construct();
    }



    public function  index()
    {
        echo("<h1>Slam</h1>");

    }

     public  function hoctro()
     {

         $this->load->view("view_hoctro");
     }


     public  function  duyetmang()
     {

         $data["xiao"] = array(

             "ten" => "tranbaohuu",
             "tuoi" => 24,


         );

         $data["data_info"] = array(

             "ten" => "cu sam",
             "tuoi" => 19,


         );


         $this->load->view("view_hoctro",$data);

     }

public  function test_csdl_query()
{
    $this->load->database();

    $query = $this->db->query("select * from thongtin");

    $data = $query->result_array();
    echo "<pre>";

    print_r($data);
    echo "</pre>";
}

     public  function test_csdl_active_record()
     {

         $this->load->database();
         $this->db->select("id,diachi"); // Lấy các cột cần
         $this->db->where("diachi","333333");
         $query = $this->db->get("thongtin");

         $data = $query->result_array();

         echo "<pre>";

         print_r($data);
         echo "</pre>";
     }

     public function test_select_join_bang()

     {
         $this->load->database();
         $this->db->join("lop","lop.id = thongtin.id_lop");

         $query = $this->db->get("thongtin");
         $data = $query->result_array();

         echo "<pre>";

         print_r($data);
         echo "</pre>";




     }


     public function demo_admin()
     {

         $this->load->view("master_header");

     }

}


