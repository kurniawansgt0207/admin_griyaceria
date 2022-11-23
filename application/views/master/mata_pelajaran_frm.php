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
                            <h6 class="m-0 font-weight-bold text-primary">INPUT DATA KELAS</h6>
                        </div>                        
                        <form class="user" name="frmKelas" id="frmKelas" method="post" action="<?php echo base_url();?>pelajaran/simpan_data">
                            <input type="hidden" name="id" id="id" value="<?php echo ($pelajaran[0]->id != "") ? $pelajaran[0]->id : 0;?>">
                            <div class="card-body p-4" style="margin-top:-35px">
                                <div class="row">                                      
                                    <div class="col-lg-6">
                                        <div class="p-4">
                                            <div class="form-group">
                                                <label>KODE PELAJARAN</label>
                                                <div class="input-group">
                                                    <div class="input-group"><input type="text" class="form-control" name="kodepelajaran" id="kodepelajaran" value="<?php echo ($pelajaran[0]->id != "") ? $pelajaran[0]->kode_mapel : "";?>" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>NAMA PELAJARAN</label>
                                                <div class="input-group">
                                                    <div class="input-group"><input type="text" class="form-control" name="namapelajaran" id="namapelajaran" value="<?php echo ($pelajaran[0]->id != "") ? $pelajaran[0]->nama_mapel : "";?>" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>STATUS AKTIF</label>
                                                <div class="input-group">
                                                    <select name="statusaktif" id="statusaktif" class="form-control form-control-static">
                                                        <option value="1" <?php echo ($pelajaran[0]->status_aktif== 1) ? "selected" : "";?>>AKTIF</option>
                                                        <option value="0" <?php echo ($pelajaran[0]->status_aktif== 0) ? "selected" : "";?>>TIDAK AKTIF</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                
                                                <input type="submit" value="Simpan Data" name="btn_submit" id="btn_submit" class="btn btn-sm btn-primary">
                                                <input type="button" value="Kembali" name="btn_back" id="btn_back" class="btn btn-sm btn-warning" onclick="backPage()">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>                        
                </div>
                
                <!-- Sticky Footer -->
                <?php $this->load->view("_partials/footer.php") ?>
            </div>
        </div>
    </div>
    
    <?php $this->load->view("_partials/scrolltop.php") ?>
    <?php $this->load->view("_partials/modal.php") ?>
    <?php $this->load->view("_partials/js.php") ?>
    <script>
        function backPage(){
            window.location = '<?php echo base_url();?>pelajaran';
        }        
    </script>
</body>
</html>