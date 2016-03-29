 <?php

 Class Webmodel extends CI_Model{




    function validasiAdmin(){


        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        // Run the query
        $query = $this->db->get('user');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->id,
                    'uname' => $row->username,
                    'validamin' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;


    }


    function insert_karya($idkarya,$iduploader,$judulvideo,$keterangan,$kategori,$filename){

            $data = array(
                'id_karya'=> $idkarya ,
                'id_uploader'=> $iduploader,
                'judul_video'=> $judulvideo,
                'keterangan'=> $keterangan ,
                'kategori'=> $kategori,
                'filename'=>$filename

            );

            $this->db->insert('videos', $data);

    }

    function get_karya(){


              $queryKonserve= $this->db->query("SELECT * from videos");

              if($queryKonserve->num_rows() > 0)
              {

                  return $queryKonserve->result();

              }
    }

 }













 ?>
