<?php defined('BASEPATH') or exit('No direct script access allowed');

class curd_model extends CI_Model
{

   public function Add()
   {

      if (!isset($_POST['data']['name']) || empty($_POST['data']['name'])) {
         return ['status' => 'Badrequest', 'statusCode' => 400, 'return' => 'name'];
      }
      if (!isset($_POST['data']['email']) || empty($_POST['data']['email'])) {
         return ['status' => 'Badrequest', 'statusCode' => 400, 'return' => 'email'];
      }
      if (!isset($_POST['data']['phone_No']) || empty($_POST['data']['phone_No'])) {
         return ['status' => 'Badrequest', 'statusCode' => 400, 'return' => 'phone_No'];
      }
      if (!isset($_POST['data']['address']) || empty($_POST['data']['address'])) {
         return ['status' => 'Badrequest', 'statusCode' => 400, 'return' => 'address'];
      }
      if (!isset($_POST['data']['password']) || empty($_POST['data']['password'])) {
         return ['status' => 'Badrequest', 'statusCode' => 400, 'return' => 'password'];
      }
      if (!isset($_POST['data']['id']) || empty($_POST['data']['id'])) {

         $this->db->select('user_details.id');
         $this->db->from('user_details');
         $this->db->where('user_details.phone_No', $_POST['data']['phone_No']);
         $row_data = $this->db->get()->row_array();
         if (empty($row_data)) {

            $insert_array = [
               'name' => isset($_POST['data']['name']) ? $_POST['data']['name'] : '',
               'email' => isset($_POST['data']['email']) ? $_POST['data']['email'] : '',
               'phone_No' => isset($_POST['data']['phone_No']) ? $_POST['data']['phone_No'] : '',
               'address' => isset($_POST['data']['address']) ? $_POST['data']['address'] : '',
               'password' => isset($_POST['data']['password']) ? $_POST['data']['password'] : '',
               'del' => '0'
            ];
            $result = $this->db->insert('user_details', $insert_array);
            $insert_id =  $this->db->insert_id();
            if ($result > 0) {
               return ['status' => 'Success', 'statusCode' => 200, 'return' => $insert_id];
            } else {
               $Msg = "Data not inserted..!";
               return ['status' => 'Badrequest', 'statusCode' => 400, 'Msg' => $Msg];
            }
         } else {
            $Msg = "Allready data exists..!";
            return ['status' => 'Badrequest', 'statusCode' => 400, 'Msg' => $Msg];
         }
      } else {
         $update_array = [
            'name' => isset($_POST['data']['name']) ? $_POST['data']['name'] : '',
            'email' => isset($_POST['data']['email']) ? $_POST['data']['email'] : '',
            'phone_No' => isset($_POST['data']['phone_No']) ? $_POST['data']['phone_No'] : '',
            'address' => isset($_POST['data']['address']) ? $_POST['data']['address'] : '',
            'password' => isset($_POST['data']['password']) ? $_POST['data']['password'] : '',
         ];
         $this->db->where('user_details.id', $_POST['data']['id']);
         $result = $this->db->update('user_details', $update_array);
         if ($result) {
            return ['status' => 'Success', 'statusCode' => 200, 'return' => 'Data Update Successfully'];
         } else {
            return ['status' => 'Badrequest', 'statusCode' => 400, 'Msg' => "Data not updated..!"];
         }
      }
   }



   public function get_data()
   {

      if (isset($_GET['id']) && !empty($_GET['id'])) {

         $this->db->select('user_details.*');
         $this->db->from('user_details');
         $this->db->where('user_details.id', $_GET['id']);
         $result = $this->db->get()->result_array();
         if ($result > 0) {
            return $result;
         } else {
            return ['id' => ['id' => '']];
         }
      }
   }
}
