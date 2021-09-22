<?php defined ('BASEPATH') or exit('No direct script acess allowed');
class Book_Category extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('Book_category_model');
    }

    public function index()
    {
        $data['book_category'] = $this->Book_category_model->bookcategory_getAll();
        $this->load->view('admin/book_category/v_bookcategory', $data);
    }
    public function add()
	{
		$name = strip_tags ( $this->input->post('i_name'));
			// Input Array
		$data = array (
			'name' => $name 
		);
			// Insert ke Database
		$x = $this->Book_Category_model->book_category_cek($name);
		if ($x==Null){
			$this->Book_Category_model->book_category_insert ( 'book_category' , $data);
			echo '<script language=JavaScript>alert("Input Berhasil")
			onclick=location.href = document.referrer</script>' ;
		}
		else
		{
			echo '<script language=JavaScript>alert("Gagal!! Book Category telah tersimpan sebelumnya")
			onclick=history.go(-1)</script>' ;
		}
	}

	public function edit($id)
	{
		$data ['book_category'] = $this->Book_Category_model->book_category_getById ($id);
		$name = strip_tags($this->input->post ('i_name'));
			// Input Array
		$data = array (
			'name' => $name
		);
			//Insert ke Database
		$x = $this->Book_Category_model->book_category_cek($name);
		if ($x==Null){
			$this->Book_Category_model->book_category_update ( $id,'book_category' , $data);
			echo '<script language=JavaScript>alert("Update Berhasil")
			onclick=location.href = document.referrer</script>' ;
		}
		else
		{
			echo '<script language=JavaScript>alert("Gagal!! Book Category telah tersimpan sebelumnya")
			onclick=history.go(-1)</script>' ;
		}
	}

	public function delete ($id)
	{
		$this->Book_Category_model->book_category_delete ('book_category' , $id );
		echo '<script language=JavaScript>alert("delete Berhasil")
		onclick=history.go(-1)</script>' ;
	}
}
?>