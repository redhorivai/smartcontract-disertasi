<?= $this->extend('layout/main_layout'); ?>
<!-- MAIN CONTENT -->
<?= $this->section('content') ?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <!-- <i class="mdi mdi-account-multiple" style="font-size: 30px;padding-right:3px;"></i>
            <p class="page-title text-uppercase"><?= $title; ?></p> -->
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="font-size: medium;">
                        <li class="breadcrumb-item"><a href=<?= base_url('/') ?>><i class="mdi mdi-view-dashboard">Beranda</i></a></li>
                        <li class="breadcrumb-item active" aria-current="page" href="javascript:void(0)"><i class="mdi mdi-account-multiple"><?= $title; ?></i></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <button class="btn btn-primary btn-sm">
                            <span><i class="m-r-20 mdi mdi-grease-pencil"></i></span>
                            <span>TAMBAH DATA</span>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <span><i class="m-r-10 mdi mdi-delete"></i></span>
                            <span>HAPUS SEMUA</span>
                        </button>
                    </div>
                    <div class="table-responsive" style="margin-top: 30px;">
                        <?= form_open('Pengguna/multi_del', ['class' => 'formMultiDelete']) ?>
                        <!-- TABLE -->
                        <table id="viewTable" class="table table-striped table-bordered table display w-100">
                            <thead>
                                <tr style="background-color: #f4efb7bd;">
                                    <th style="width: 2%;">
                                        <label class="customcheckbox m-b-20">
                                            <input type="checkbox" id="checkAll" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>
                                    <th class="text-uppercase" style="text-align: center;"><?= $title ?></th>
                                    <th style="width: 20%;text-align:center;">AKSI</th>
                                </tr>
                            </thead>
                        </table>
                        <?= form_close() ?>
                        <!-- END TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<!-- END CONTENT -->