<?php
class AdminModel extends CI_Model {

    public function insert_image($array)
    {
        return $this->db->insert('gallery_images', $array);
    }

    public function get_image_data()
    {
        $query = $this->db->get('gallery_images');
        return $query->result();
    }

    public function get_image_single_data($id)
    {
        $query = $this->db->get_where('gallery_images', array('image_id' => $id));
        return $query->row();

    }

   public function delete_image_model($id)
   {
        return $this->db->delete('gallery_images', array('image_id' => $id));
   }

   public function update_image($id , $array)
   {
    
    // $this->db->where('image_id', $id);
    // $this->db->update('gallery_images', $array);

    return $this->db->where('image_id', $id)
                    ->update('gallery_images', $array);
   }



//    team model
// ==============================================================
// =================================================================

public function insert_team_image($array)
{
    return $this->db->insert('team_images', $array);
}

public function get_team_image_data()
{
    $query = $this->db->get('team_images');
    return $query->result();
}

public function get_team_image_single_data($id)
{
    $query = $this->db->get_where('team_images', array('team_id' => $id));
    return $query->row();

}

public function delete_team_image_model($id)
{
    return $this->db->delete('team_images', array('team_id' => $id));
}

public function update_team_image($id , $array)
{

// $this->db->where('image_id', $id);
// $this->db->update('gallery_images', $array);

return $this->db->where('team_id', $id)
                ->update('team_images', $array);
}


//    Teastimonial model 
// ============================================================================
// =================================================================================



public function insert_testimonial_image($array)
{
    return $this->db->insert('testimonial', $array);
}

public function get_testimonial_image_data()
{
    $query = $this->db->get('testimonial');
    return $query->result();
}

public function get_testimonial_image_single_data($id)
{
    $query = $this->db->get_where('testimonial', array('testimonial_id' => $id));
    return $query->row();

}

public function delete_testimonial_image_model($id)
{
    return $this->db->delete('testimonial', array('testimonial_id' => $id));
}

public function update_testimonial_image($id , $array)
{

// $this->db->where('image_id', $id);
// $this->db->update('gallery_images', $array);

return $this->db->where('testimonial_id', $id)
                ->update('testimonial', $array);
}




// service master model ======================================================
// ==========================================================================
// ===============================================================================




public function insert_service($array)
{
    return $this->db->insert('service_master', $array);
}

public function get_service_data()
{
    $query = $this->db->get('service_master');
    return $query->result();
}

public function get_service_single_data($id)
{
    $query = $this->db->get_where('service_master', array('service_id' => $id));
    return $query->row();

}

public function delete_service_model($id)
{
    return $this->db->delete('service_master', array('service_id' => $id));
}

public function update_service($id , $array)
{

// $this->db->where('image_id', $id);
// $this->db->update('gallery_images', $array);

return $this->db->where('service_id', $id)
                ->update('service_master', $array);
}

// Appointment  model ======================================================
// ==========================================================================
// ===============================================================================




public function insert_appointment($array)
{
    return $this->db->insert('appointment', $array);
}

public function get_appointment_data()
{
    $query = $this->db->get('appointment');
    return $query->result();
}

public function get_appointment_single_data($id)
{
    $query = $this->db->get_where('appointment', array('appointment_id' => $id));
    return $query->row();

}

public function delete_appointment_model($id)
{
    return $this->db->delete('appointment', array('appointment_id' => $id));
}



// ================================================================================================
// =================================================================================================
// contact model 



public function insert_contact($array)
{
    return $this->db->insert('contact_master', $array);
}

public function get_contact_data()
{
    $query = $this->db->get('contact_master');
    return $query->result();
}


public function delete_contact_model($id)
{
    return $this->db->delete('contact_master', array('contact_id' => $id));
}



}

?>