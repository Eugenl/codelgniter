<?php
/**
 * 站点公共模型
 * @author      eugenl
 * @version     v1.0.
 */


$tel = $_POST["mobile"];
$pws = $_POST["password"];
$yzm = $_POST["verify"];

$query = $this->db->get('login');

if ($query->num_rows() > 0)
{
	$url1 = site_url('aftlogin/index');
	$url2 = site_url('login/login');
	foreach ($query->result() as $row)
	{
	   if($tel == $row->TEL)
	   		if($pws == $row->PASSWORD)
	   			header("Location: $url1");
	   		else header("Location: $url2");
	   	else header("Location: $url2");
	}
}
/* End of file login_check.php */
/* Location: ./application/views/login_check.php */