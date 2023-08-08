<?php
class AdminLoginModel extends CI_Model {


    // FOR INSERT DATA IN DATABASE ( CODE )

    public function user_resistration($array)
    {
        return $this->db->insert('cleanex_admin', $array);
    }
    

    // FOR CHECK DATA IN DATABASE ( CODE ) AND LOGIM THIS USER ( CODE )

    public function check_user($email, $password)
    {
        // FOR CHECK EMAIL AND PASSWORD IN DATABASE ( CODE )

        $query = $this->db->get_where('cleanex_admin', array('email' => $email, 'password' => $password));
        if ($query->num_rows())
        {
            return  $query->row();

        }
        else
        {
            return FALSE; // FOR WRONG USER
        }
    }

}

?>