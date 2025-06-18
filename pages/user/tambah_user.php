<!-- Content Header (Page header) -->
<div class="content-header">  
    <div class="container-fluid">  
        <div class="row mb-2">  
            <div class="col-sm-12">  
                <h1 class="m-0">Kelola Data <i class="fas fa-angle-right"></i> Pengguna</h1>  
            </div><!-- /.col -->  
        </div><!-- /.row -->  
    </div><!-- /.container-fluid -->  
</div>  
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!--/query validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data</h3>
                    </div>
                    <!-- / card-header -->
                    <!-- form start -->
                    <form id="tambahUser" method="post" action="pages/user/proses_tambah_user.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Nama Pengguna</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Masukan nama pengguna...">
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Masukan email...">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor Handphone</label>
                                <input type="tel" name="no_hp" class="form-control" id="no_hp" placeholder="Masukan nomor handphone...">
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Masukan kata sandi...">
                            </div>
                            <div class="form-group">
                                <label for="retype_password">Ulangi Kata Sandi</label>
                                <input type="password" name="retype_password" class="form-control" id="retype_password" placeholder="Ketik ulang kata sandi...">
                            </div>
                        </div>
                        <!-- / card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- / card -->
            </div>
        </div>
        <!-- / row -->
    </div><!-- / container-fluid -->
</div>
<!-- / content -->

<!-- jQuery Validation Script -->
<script>
$(document).ready(function() {
    $('#tambahUser').validate({
        rules: {
            username: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            no_hp: {
                required: true,
                rangelength: [10, 16]
            },
            password: {
                required: true,
                rangelength: [6, 25]
            },
            retype_password: {
                required: true,
                equalTo: "#password"
            }
        },
        messages: {
            username: {
                required: "Silahkan masukan nama pengguna!",
                minlength: "Panjang nama pengguna minimal 3 karakter"
            },
            email: {
                required: "Silahkan masukan data email!",
                email: "Format email salah!"
            },
            no_hp: {
                required: "Silahkan masukan data nomor handphone!",
                rangelength: "Jumlah digit nomor handphone antara 10 ~ 16 digit."
            },
            password: {
                required: "Silahkan masukan password pengguna!",
                rangelength: "Jumlah karakter password harus 6 ~ 25 karakter."
            },
            retype_password: {
                required: "Silahkan ketik ulang password!",
                equalTo: "Password tidak sama."
            }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
</script>