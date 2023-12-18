<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?= $title ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pengelolaan <?= $title ?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List <?= $title ?>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Tahun Terbit</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($data_book as $value) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value['title'] ?></td>
                                                <td><?= $value['author'] ?></td>
                                                <td><?= $value['release_year'] ?></td>
                                                <td><?= $value['price'] ?></td>
                                            </tr
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?= $this->endsection() ?>
