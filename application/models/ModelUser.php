<?php

  class ModelUser extends CI_Model {

    public function getdatauser()
       {
          $query = $this->db->get('tb_datauser');
          return $query->result();
       }

    public function getdatapenghasilan()
      {
          $query = $this->db->get('tb_datapenghasilan');
          return $query->result();
      }

      public function getdataahliwaris()
        {
            $query = $this->db->get('tb_ahliwaris');
            return $query->result();
        }

        public function getdatapembiayaan()
          {
              $query = $this->db->get('tb_pembiayaan');
              return $query->result();
          }
    }

 ?>
