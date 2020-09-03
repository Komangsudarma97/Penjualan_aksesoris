                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                        Sinar Ban Abadi <small>Tambah Data Admin</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('operator/post'); ?>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"  name="password" placeholder="Masukan Password">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('operator','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->