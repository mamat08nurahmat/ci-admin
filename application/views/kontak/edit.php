<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Blank page
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Title</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
<!--  -->

<?php echo form_open('kontak/edit');?>
<?php echo form_hidden('id',$datakontak[0]->id);?>

<table>

    <tr><td>ID</td><td><?php echo form_input('',$datakontak[0]->id,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama',$datakontak[0]->nama);?></td></tr>
    <tr><td>NOMOR</td><td><?php echo form_input('nomor',$datakontak[0]->nomor);?></td></tr>
    <tr><td>EMAIL</td><td><?php echo form_input('email',$datakontak[0]->email);?></td></tr>
    <tr><td>PESAN</td><td><?php echo form_input('pesan',$datakontak[0]->pesan);?></td></tr>
    
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>

<!--  -->
</div><!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div><!-- /.box-footer-->
    </div><!-- /.box -->

</section><!-- /.content -->

<?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>
