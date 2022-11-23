<?php ini_set('display_errors','off'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("_partials/head.php") ?>    
</head>

<body id="page-top">
    <div id="wrapper">
        <?php $this->load->view("_partials/sidebar.php") ?>
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            
            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view("_partials/navbar.php") ?>
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DAFTAR MATA PELAJARAN</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">                                      
                                <div class="col-lg-12">
                                    <?php
                                        if($this->session->userdata('kodepengajar')=="GC-ADMIN"){
                                    ?>
                                    <div style="margin-bottom:10px;"><button type="button" class="btn btn-sm btn-primary" onclick="addData()">Tambah Data</button></div>
                                    <?php
                                        }
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-sm" style="font-size: 15px;" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm text-center">NO</th>
                                                    <th class="th-sm text-center">KODE PELAJAR</th>
                                                    <th class="th-sm text-center">NAMA PELAJAR</th>                                           
                                                    <th class="th-sm text-center">STATUS</th>                                            
                                                    <th class="th-sm text-center">AKSI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $no = 1;
                                                    if(count($pelajaranList)>0){
                                                        foreach($pelajaranList as $pelajaran){
                                                            $status = ($pelajaran->status_aktif==1) ? "Aktif" : "Tidak Aktif";
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no;?></td>
                                                    <td class="text-center"><?php echo $pelajaran->kode_mapel;?></td>
                                                    <td class="text-left"><?php echo $pelajaran->nama_mapel;?></td>
                                                    <td class="text-center"><?php echo $status;?></td>
                                                    <td class="text-center">
                                                        <?php                                                                                                        
                                                            if($setubah == 1){
                                                        ?>
                                                                <a href="<?php echo base_url();?>pelajaran/form_ubah/<?php echo $pelajaran->id;?>">[Ubah]</a> | 
                                                                <a href="#" onclick="hapusData('<?php echo $pelajaran->id;?>')">[Hapus]</a>
                                                        <?php
                                                            } else {
                                                                if($this->session->userdata('kodepelajaran')=="GC-ADMIN"){
                                                        ?>
                                                                <a href="<?php echo base_url();?>pelajaran/form_ubah/<?php echo $pelajaran->id;?>">[Ubah]</a>                                                            
                                                        <?php
                                                                }
                                                            }
                                                        ?>                                                
                                                    </td>
                                                </tr>             
                                                <?php
                                                            $no++;
                                                        }
                                                    } else {
                                                ?>
                                                <tr><td colspan="9" align="center">Data Tidak Ditemukan</td></tr>                                        
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
                <?php $this->load->view("_partials/footer.php") ?>
            </div>
        </div>
    </div>
    
    <?php $this->load->view("_partials/scrolltop.php") ?>
    <?php $this->load->view("_partials/modal.php") ?>
    <?php $this->load->view("_partials/js.php") ?>
    <?php $this->load->view("_partials/js_table.php") ?>
    <script>
        function addData(){
            window.location = "<?php echo base_url();?>pelajaran/form_input";
        }
        
        function hapusData(id){
            var tny = confirm("Yakin Akan Menghapus Data Ini ?");
            if(tny == 1){
                window.location = '<?php echo base_url();?>pelajaran/hapus_data/'+id;
            }
        }
    </script>
</body>
</html>