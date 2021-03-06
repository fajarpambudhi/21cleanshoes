<!DOCTYPE html>
<html>
<head>
	<?php 
	$this->load->view('backend/head');
	?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php 
		$this->load->view('backend/header');
		$this->load->view('backend/nav');
		?>
		<?php
        $id = '';
        // $judul = '';
        // $konten_service = '';
        // $logo = '';
       
        // if(isset($service)){
        //  foreach($service as $row){
        //   $id = $row->id;
        //   $judul = $row->judul;
        //   $konten_service = $row->konten_service;
        //   $logo = $row->logo;

      //   }
      // }
    ?>
		
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Testimonials
					<small>Control Panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>
			<!-- Main Content -->
			<section class="content">
				<div class="row" style="margin-left:  50px">
					<!-- ISI KONTEN -->
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<form method="post" action="tambahtestimoni">
								<button type="button" class="btn btn-primary" class="form-control" data-toggle="modal" data-target="#modal-default">Tambah</button>
							</form>
							<div class="table-responsive">
								<table id="mytable" class="table table-bordered table-striped table-hover">
									<thead>
										<th width="30px">No</th>
										<th width="50px">Foto</th>
										<th>Nama</th>
										<th>Deskripsi</th>
										<th width="30px">Edit</th>
										<th width="35px">Delete</th>

									</thead>
									<tbody>
										<?php $no = 1;
										 foreach ($testimoni as $row) { ?>
											<tr>
												<td><?=$no?></td>
											    <td><img src="<?php echo base_url('assets/img/testimoni/'.$row->foto.'');?>" height='50px'></td>
											    <td><?php echo $row->nama; ?></td>
											    <td><?php echo $row->deskripsi; ?></td>
											    <td><p data-placement="top" data-toggle="tooltip" title="Edit">
											    	<button type="button" onclick="return getTestimoniById(<?php echo $row->id; ?>)" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
											    </td>
											    <td><p data-placement="top" data-toggle="tooltip" title="Delete">
											    	<button value="<?php echo $id ?>" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#modal-delete" ><span class="glyphicon glyphicon-trash"></span></button></a></p>
										   </tr>
										<?php $no++; } ?>
									</tbody>
								</table>
								<div class="clearfix"></div>
								<ul class="pagination pull-right">
									<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-lableledby="edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					<h4 class="modal-title contom-align" id="Heading">Edit Your Detail</h4>
				</div>
				<div class="modal-body">
					
				<form id="update_testimoni" action="update_testimoni" enctype="multipart/form-data" method="post">
						<div class="box-body">
							<input type="text" id="id_testimoni" name="id_testimoni" class="form-control hide" value="">
							<label for="konten">Nama</label>
							<input type="text" id="nama" name="nama" class="form-control" value="">
							<span class="help-block"></span>
						</div>
						<div class="box-body">
							<label for="konten">Deskripsi</label>
							<textarea name="deskripsi" id="deskripsi" value="" class="form-control"></textarea>
						</div>
						<div class="box-body">
							<label for="image">Upload Image</label>
							<div id="photo-preview" style="width: 150px;"></div> 
							<input type="file" value="" name="foto" id="foto" class="form-control" >
							
						</div>
					<!-- </table> -->
				
				
				</div>
				
				<div class="modal-footer">
					<button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>Update
					</button>
				</div>
				</form>
			</div> <!-- Modal content -->
		</div> <!-- Modal Dialog -->
	<!-- </div> Modal Fade -->
</section>

	<div class="control-sidebar-bg"></div>
	<div class="modal fade" id="modal-default">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Input Product</h4>
				</div>
				<div class="modal-body">
					<form action="tambahtestimoni" enctype="multipart/form-data" method="post">
						<div class="box-body">
							<label for="judul">Nama</label><br>
							<input type="text" id="nama" name="nama" class="form-control" value="">
							<span class="help-block"></span>
						</div>
						<div class="box-body">
							<label for="judul">Deskripsi</label><br>
							<textarea name="deskripsi" value="" class="form-control"></textarea>
						</div>
						<div class="box-body">
							<label for="logo">Upload Image</label>
							<input type="file" value="" name="foto" class="form-control">
						</div>

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<!-- Modal-Delete -->
	<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
         
                <div class="modal-body">
                    <p>Do you want to proceed?</p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a href="<?php echo 'delete_testimoni/'.$row->id; ?>"><button value="<?php echo $id ?>" class="btn btn-danger">Delete</a></button>
                </div>
            </div>
        </div>
    </div>

	

<?php 
$this->load->view('backend/js');
?>


<script type="text/javascript">
	function getTestimoniById(id) {
		var data = {
			id : id
		};
		$('#photo-preview').html(''); // show photo
		$.ajax({
			type: 'post',
			url : '<?php echo base_url()?>/Backend/getTestimoniById',
			data : data,
			success : function(response){
				var testimoni = JSON.parse(response);
				var base_url = '<?php echo base_url();?>';
				$("#update_testimoni")[0].reset();

				document.getElementById("id_testimoni").value = testimoni.id;
				document.getElementById("nama").value = testimoni.nama;
				document.getElementById("deskripsi").value = testimoni.deskripsi;
		
				 $('#photo-preview').append('<img src="'+base_url+'assets/img/testimoni/'+testimoni.foto+'" class="img-responsive">'); // show photo
				$('#edit').modal('show');
			}
		});
	}
	
</script>
</body>

</html>
