<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/easyResponsiveTabs.js"></script>
    <!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <title>Form Perkawinan</title>
    <style type="text/css" rel="stylesheet">
        html {
            overflow-y: scroll; 
        }
        body {
            background: #ffffff;
        }
        img {
            float:left;
            margin-right: 0.3cm;
        }
        #container {
            width: 940px;
            margin: 0 auto;
        }
        @media only screen and (max-width: 768px) {
            #container {
                width: 90%;
                margin: 0 auto;
            }
        }
    </style>
</head>
<body>
    <div id="container">
        <img src="img/logo.png" width="60" height="70">
        <h1 style="font-size:32px;">PENDAFTARAN PENCATATAN PERKAWINAN</h1>
        <p>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL KOTA SURABAYA</p>
        <br>
        <!--Horizontal Tab-->
        <div id="parentHorizontalTab">
            <ul class="resp-tabs-list hor_1">
                <li>Home</li>
                <li>Pendaftaran Perkawinan</li>
                <li>Cetak Tanda Bukti Pendaftaran</li>
            </ul>
            <div class="resp-tabs-container hor_1">
                <div>
                    Selamat Datang, Terima kasih telah membuka website kami. Berikut kami informasikan tata cara Pendaftaran Online Perkawinan :
                    <br>
                    <ul>
                        <li>Mengisi form Pendaftaran dengan benar</li>
                        <li>Mencetak Tanda Bukti Pendaftaran</li>
                        <li>Membawa Hasil Cetak Form Pendaftaran beserta kelengkapan persyaratan ke Dispenduk untuk diverifikasi Petugas.</li>
                    </ul>
                </div>
                <div>
                    <p>
                        <!--vertical Tabs-->
                        <form id="myform" action="proses.php" method="post">
                        <div id="ChildVerticalTab_1">
                            <ul class="resp-tabs-list ver_1">
                                <li>Data Perkawinan</li>
                                <li>Data Suami</li>
                                <li>Data Istri</li>
                                <li>Data Saksi</li>
                                <li>Simpan dan Cetak</li>
                            </ul>
                            <div class="resp-tabs-container ver_1">
                                <div>
                                    
                                        <table style="width:100%" cellspacing="0">
                                             <!--Data Suami-->
                                            <tr>
                                                <th colspan="2"><big>Data Perkawinan</big></th>
                                            </tr>
                                            <tr>
                                                <td >Kewarganegaraan</td>
                                                <td><input id="kwn" name="kwn" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Hari, Tanggal</td>
                                                <td><input id="hari" name="hari" type="text">, <input id="tgl" name="tgl" type="date"></td>
                                            </tr>
                                        </table>
                                    
                                </div>
                                
                                <div>
                                        <table style="width:100%" cellspacing="0">
                                             <!--Data Suami-->
                                            <tr>
                                                <th colspan="2"><big>Data Suami</big></th>
                                            </tr>
                                            <tr>
                                                <td >Nama Keluarga</td>
                                                <td><input id="nama_s" name="nama_s" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kecil</td>
                                                <td><input id="namakecil_s" name="namakecil_s" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tgl Lahir</td>
                                                <td><input id="tmplahir_s" name="tmplahir_s" type="text" size="5%">, <input id="tgllahir_s" name="tgllahir_s" type="date"></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td><input id="agama_s" name="agama_s" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan / Pangkat</td>
                                                <td><input id="pekerjaan_s" name="pekerjaan_s" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat sekarang</td>
                                                <td><input id="almskg_s" name="almskg_s" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat dahulu</td>
                                                <td><input id="almdulu_s" name="almdulu_s" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Sudah/Belum Kawin</td>
                                                <td><input id="pernahkawin_s" name="pernahkawin_s" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama suami/isteri terdahulu</td>
                                                <td><input id="bekaspsg_s" name="bekaspsg_s" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Anak-anak yang akan disahkan</td>
                                                <td><input id="anakdisah_s" name="anakdisah_s" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <!--Data Ayah Suami-->
                                            <tr>
                                                <th colspan="2"><big>Data Ayah dari Suami</big></th>
                                            </tr>
                                            <tr>
                                                <td >Nama Keluarga</td>
                                                <td><input id="nama_as" name="nama_as" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kecil</td>
                                                <td><input id="namakecil_as" name="namakecil_as" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tgl Lahir</td>
                                                <td><input id="tmplahir_as" name="tmplahir_as" type="text" size="5%">, <input id="tgllahir_as" name="tgllahir_as" type="date"></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td><input id="agama_as" name="agama_as" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan / Pangkat</td>
                                                <td><input id="pekerjaan_as" name="pekerjaan_as" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat sekarang</td>
                                                <td><input id="almskg_as" name="almskg_as" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <!--Data Ibu Suami-->
                                            <tr>
                                                <th colspan="2"><big>Data Ibu dari Suami</big></th>
                                            </tr>
                                            <tr>
                                                <td >Nama Keluarga</td>
                                                <td><input id="nama_is" name="nama_is" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kecil</td>
                                                <td><input id="namakecil_is" name="namakecil_is" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tgl Lahir</td>
                                                <td><input id="tmplahir_is" name="tmplahir_is" type="text" size="5%">, <input id="tgllahir_is" name="tgllahir_is" type="date"></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td><input id="agama_is" name="agama_is" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan / Pangkat</td>
                                                <td><input id="pekerjaan_is" name="pekerjaan_is" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat sekarang</td>
                                                <td><input id="almskg_is" name="almskg_is" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                        </table>
                                </div>
                                
                                
                                <div>
                                        <table style="width:100%" cellspacing="0">
                                             <!--Data Istri-->
                                            <tr>
                                                <th colspan="2"><big>Data Istri</big></th>
                                            </tr>
                                            <tr>
                                                <td >Nama Keluarga</td>
                                                <td><input id="nama_i" name="nama_i" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kecil</td>
                                                <td><input id="namakecil_i" name="namakecil_i" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tgl Lahir</td>
                                                <td><input id="tmplahir_i" name="tmplahir_i" type="text" size="5%">, <input id="tgllahir_i" name="tgllahir_i" type="date"></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td><input id="agama_i" name="agama_i" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan / Pangkat</td>
                                                <td><input id="pekerjaan_i" name="pekerjaan_i" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat sekarang</td>
                                                <td><input id="almskg_i" name="almskg_i" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat dahulu</td>
                                                <td><input id="almdulu_i" name="almdulu_i" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Sudah/Belum Kawin</td>
                                                <td><input id="pernahkawin_i" name="pernahkawin_i" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama suami/isteri terdahulu</td>
                                                <td><input id="bekaspsg_i" name="bekaspsg_i" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Anak-anak yang akan disahkan</td>
                                                <td><input id="anakdisah_i" name="anakdisah_i" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <!--Data Ayah Istri-->
                                            <tr>
                                                <th colspan="2"><big>Data Ayah dari Istri</big></th>
                                            </tr>
                                            <tr>
                                                <td >Nama Keluarga</td>
                                                <td><input id="nama_ai" name="nama_ai" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kecil</td>
                                                <td><input id="namakecil_ai" name="namakecil_ai" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tgl Lahir</td>
                                                <td><input id="tmplahir_ai" name="tmplahir_ai" type="text" size="5%">, <input id="tgllahir_ai" name="tgllahir_ai" type="date"></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td><input id="agama_ai" name="agama_ai" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan / Pangkat</td>
                                                <td><input id="pekerjaan_ai" name="pekerjaan_ai" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat sekarang</td>
                                                <td><input id="almskg_ai" name="almskg_ai" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <!--Data Ibu Istri-->
                                            <tr>
                                                <th colspan="2"><big>Data Ibu dari Istri</big></th>
                                            </tr>
                                            <tr>
                                                <td >Nama Keluarga</td>
                                                <td><input id="nama_ii" name="nama_ii" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kecil</td>
                                                <td><input id="namakecil_ii" name="namakecil_ii" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tgl Lahir</td>
                                                <td><input id="tmplahir_ii" name="tmplahir_ii" type="text" size="5%">, <input id="tgllahir_ii" name="tgllahir_ii" type="date"></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td><input id="agama_ii" name="agama_ii" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan / Pangkat</td>
                                                <td><input id="pekerjaan_ii" name="pekerjaan_ii" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat sekarang</td>
                                                <td><input id="almskg_ii" name="almskg_ii" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                        </table>
                                </div>
                                
                                
                                <div>
                                        <table style="width:100%" cellspacing="0">
                                            <!--Data Saksi 1-->
                                            <tr>
                                                <th colspan="2"><big>Data Saksi Pertama</big></th>
                                            </tr>
                                            <tr>
                                                <td >Nama Keluarga</td>
                                                <td><input id="nama_s1" name="nama_s1" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kecil</td>
                                                <td><input id="namakecil_s1" name="namakecil_s1" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tgl Lahir</td>
                                                <td><input id="tmplahir_s1" name="tmplahir_s1" type="text" size="5%">, <input id="tgllahir_s1" name="tgllahir_s1" type="date"></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td><input id="agama_s1" name="agama_s1" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan / Pangkat</td>
                                                <td><input id="pekerjaan_s1" name="pekerjaan_s1" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat sekarang</td>
                                                <td><input id="almskg_s1" name="almskg_s1" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <!--Data Saksi 2-->
                                            <tr>
                                                <th colspan="2"><big>Data Saksi Kedua</big></th>
                                            </tr>
                                            <tr>
                                                <td >Nama Keluarga</td>
                                                <td><input id="nama_s2" name="nama_s2" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kecil</td>
                                                <td><input id="namakecil_s2" name="namakecil_s2" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat, Tgl Lahir</td>
                                                <td><input id="tmplahir_s2" name="tmplahir_s2" type="text" size="5%">, <input id="tgllahir_s2" name="tgllahir_s2" type="date"></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td><input id="agama_s2" name="agama_s2" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan / Pangkat</td>
                                                <td><input id="pekerjaan_s2" name="pekerjaan_s2" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat sekarang</td>
                                                <td><input id="almskg_s2" name="almskg_s2" type="text"></td>
                                            </tr>
                                        </table>
                                    <br>
                                    <td><input type="submit" name="tambah" value="Simpan"></td>
                                </div>
                                
                                <div>
                                    Pendaftaran berhasil disimpan, klik tautan di bawah ini untuk mencetak bukti pendaftaran perkawinan.<br>
                                    <a href="http://localhost/formnikah/cetak.php">Cetak</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    </p>
                    <p>Note : * = Wajib Diisi</p>
                </div>
            
                <div>
                    <form>
                        <table style="width:80%">
                            <tr>
                                <td>ID Pernikahan</td>
                                <td><input type="text" size="70%"></td>
                                <td><input type="button" value="Cari"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <br/>
        <footer>
            © Copyright 2017 by Dinas Kependudukan dan Catatan Sipil Kota Surabaya
        </footer>
        <br>
        <br>
        <br/>
    </div>
	
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({  
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        // Child Tab
        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
</body>
</html>
