<?php
require_once('function.php');

$id_user = $_GET['id'];

// ambil data user berdasarkan id_user
$data = query("SELECT * FROM users WHERE id_user = '$id_user'")[0];

// jika tombol simpan ditekan
if (isset($_POST['simpan'])) {

    if (ubah_user($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'user.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah!');
                document.location.href = 'user.php';
              </script>";
    }
}

include_once('templates/header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ubah Data User</h1>

    <!-- Konten Edit Data User -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6>Data User</h6>
        </div>

        <div class="card-body">

            <form method="post" action="">

                <!-- ID User -->
                <input
                    type="hidden"
                    name="id_user"
                    id="id_user"
                    value="<?= $id_user ?>">

                <!-- Username -->
                <div class="form-group row">

                    <label
                        for="username"
                        class="col-sm-3 col-form-label">
                        Username
                    </label>

                    <div class="col-sm-8">

                        <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="username"
                            value="<?= $data['username'] ?>">

                    </div>

                </div>

                <!-- User Role -->
                <div class="form-group row">

                    <label
                        for="user_role"
                        class="col-sm-3 col-form-label">
                        User Role
                    </label>

                    <div class="col-sm-8">

                        <select
                            class="form-control"
                            id="user_role"
                            name="user_role">

                            <option
                                value="admin"
                                <?= $data['user_role'] == 'admin' ? 'selected' : '' ?>>
                                Administrator
                            </option>

                            <option
                                value="operator"
                                <?= $data['user_role'] == 'operator' ? 'selected' : '' ?>>
                                Operator
                            </option>

                        </select>

                    </div>

                </div>

                <!-- Tombol -->
                <div class="form-group row">

                    <label class="col-sm-3 col-form-label"></label>

                    <div class="col-sm-8 text-right">

                        <!-- Kembali -->
                        <a
                            href="user.php"
                            class="btn btn-danger btn-icon-split">

                            <span class="icon text-white-50">
                                <i class="fas fa-chevron-left"></i>
                            </span>

                            <span class="text">
                                Kembali
                            </span>

                        </a>

                        <!-- Simpan -->
                        <button
                            type="submit"
                            name="simpan"
                            class="btn btn-primary">
                            Simpan
                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>
<!-- /.container-fluid -->

<?php
include_once('templates/footer.php');
?>