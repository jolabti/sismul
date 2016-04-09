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

    function update_karya($idkarya,$judulvideo,$keterangan,$kategori){

            $data = array(
              //  'id_karya'=> $idkarya ,
              //  'id_uploader'=> $iduploader,
                'judul_video'=> $judulvideo,
                'keterangan'=> $keterangan ,
                'kategori'=> $kategori
            //    'filename'=>$filename

            );

            $this->db->where('id_karya', $idkarya);

            $this->db->update('videos', $data);

    }

    function get_karya(){


              $queryKonserve= $this->db->get("videos");
              $num = $queryKonserve->num_rows();

                  return $queryKonserve->result();


    }

    function count_karya(){


              $queryKonserve= $this->db->get("videos");
              $num = $queryKonserve->num_rows();

                  return $num;


    }


    function hitung_data_channel(){
        $this->db->from('videos');
        return $this->db->count_all_results();
    }


        function m_hapus($id){

          $this->db-> where('id_karya', $id);
          $this->db-> delete('videos');


        }
        function m_edit($data){

          $this->db->where($data);
          $edit = $this->db->get('videos');

          return $edit->result();


        }

 }













 ?>
