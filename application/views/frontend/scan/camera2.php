<?php
$img = $this->input->post('image');
// $img = $_POST['image'];
$folderPath = "pagkage/";

$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];

$image_base64 = base64_decode($image_parts[1]);
$fileName = "1" . '.png';

$file = $folderPath . $fileName;
file_put_contents($file, $image_base64);

$result = exec("scan_image.py");
// $result = '';
// echo $result;
if ($result) {
 	preg_match("/[[:digit:]]+\.?[[:digit:]]*/", $result , $result1 ) ;
	$result = $result1[0] ;
 }
// echo $result;
if (!$result) {
	$result = '';
    $result = exec("pysql.py");
}
if (!$result){
	// $this->session->set_flashdata('rigister_success','บันทึกการเปลียนแปลงสำเร็จ');
	redirect('Frontend_control/scan','refresh');
}else{?>
	<form id="form_scan" method="POST" action="<?php echo site_url('Frontend_control/scan2') ?>">
    	<input type="hidden" name="zbar" class="image-tag" value="<?php echo $result ?>">
    </form>

	<script type="text/javascript">
		document.getElementById("form_scan").submit();
	</script>
<?php } ?>