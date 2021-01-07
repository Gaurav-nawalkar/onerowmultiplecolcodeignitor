public function service_document()
  {
$data['service_document_details'] = $this->LP_model->service_document_details();
$data['ser_dropdrown_document'] = $this->LP_model->ser_dropdrown_document();
$data['documentmaster_dropdrown'] = $this->LP_model->documentmaster_dropdrown();
$this->load->view('service_document',$data,NULL);

if($this->input->post('save'))
    {
    $sd_service_id=$this->input->post('sd_service_id');
   
   
$document_id=$this->input->post('document_id');
   
   $this->LP_model->serv_document_adding($sd_service_id,$document_id);    
   echo "Service Document Added Successfully";
    redirect(base_url()."service_document");

    }
      
}


--------------model--------------
function service_document_details()
  {
  $query=$this->db->query("SELECT a.*,b.*,c.* FROM tbl_service_document as a,tbl_service as b, tbl_document_master as c WHERE a.sd_service_id=b.ser_id AND a.sd_document_id=c.dm_id AND a.sd_status=1 GROUP BY a.sd_service_id");
  return $query->result();
  }



function service_wise_document($sd_service_id)
  {
  $query=$this->db->query("SELECT a.*,b.* FROM tbl_service_document as a,tbl_document_master as b WHERE 
    b.dm_id='$sd_service_id'");
  return $query->result();
  }
