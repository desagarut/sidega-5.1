<div class="content-wrapper">
	<section class="content-header">
		<h1>Data Produk</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('beranda'); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Data Produk</li>
		</ol>
	</section>
    <section class="content" id="maincontent">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info box-solid">
   
                    <div class="box-body">
                        <div class="table-toolbar">
                            <div class="btn-group">
                                
                                <a  class="btn btn-green" href="<?= site_url("produk/produk_tambah");?>" >
                                            Add New <i class="icon-plus"></i>
                                            </a> 
                            </div>
                            <?php 
                            
                                            if ($this->session->flashdata('message')){
                                                echo "<div class='alert alert-block alert-error show'>
                                                      <button type='button' class='close' data-dismiss='alert'>×</button>
                                                         <span>Produk Berhasil Dihapus</span>
                                                        </div>";
                                            }
                                            else if($this->session->flashdata('berhasil')){
                                                echo "<div class='alert alert-block alert-success show'>
                                                      <button type='button' class='close' data-dismiss='alert'>×</button>
                                                         <span>Produk Berhasil Disimpan</span>
                                                        </div>";
                                            }
                                            else if($this->session->flashdata('update')){
                                                echo "<div class='alert alert-block alert-success show'>
                                                      <button type='button' class='close' data-dismiss='alert'>×</button>
                                                         <span>Produk Berhasil Diupdate</span>
                                                        </div>";
                                            }
                                        
                    ?>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Brand</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                if ($data_produk->num_rows()>0) {
                                    foreach ($data_produk->result_array() as $tampil) { ?>
                                <tr >
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $tampil['kode_produk'];?></td>
                                    <td><?php echo $tampil['nama_produk'];?></td>
                                    <td><?php echo $tampil['harga'];?></td>
                                    <td><?php echo $tampil['stok'];?></td>
                                    <td><?php echo $tampil['nama_brand'];?></td>
                                    <td><?php echo $tampil['nama_kategori'];?></td>
                                    
                                    <td><a class="btn green" href="<?= site_url("produk/produk_edit/");?><?php echo $tampil['id_produk'];?>"><i class="icon-edit"></i> Edit</a>
                                    <a class="btn red" href="<?php echo base_url();?>produk/produk_delete/<?php echo $tampil['id_produk'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['nama_produk'];?>?')"><i class="icon-trash"></i> Delete</a>
        
        
                                </td>
                                </tr>
                                <?php
                                $no++;
                                }
                                }
                                
                                else { ?>
                                <tr>
                                    <td colspan="8">No Result Data</td>
                                </tr>
                                <?php
        
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

				


				


