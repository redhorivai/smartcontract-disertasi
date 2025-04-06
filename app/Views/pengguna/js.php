<script src="<?= base_url(); ?>assets/library/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="<?= base_url(); ?>assets/library/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="<?= base_url(); ?>assets/library/extra-libs/DataTables/datatables.min.js"></script>
<script src="<?= base_url(); ?>assets/library/libs/toastr/build/toastr.min.js"></script>

<script type="text/javascript">
    $(window).ready(function() {
        _getPengguna();
        $('#checkAll').click(function(e) {
            if ($(this).is(':checked')) {
                $('.listCheckbox').prop('checked', true);
            } else {
                $('.listCheckbox').prop('checked', false);
            }
        });
        // $('.formMultiDelete').submit(function(e) {
        //     e.preventDefault();
        //     let jmldata = $('.checkedId:checked');
        //     if (jmldata.length === 0) {
        //         Swal.fire({
        //             title: 'Pemberitahuan',
        //             html: 'Silahkan pilih data yang akan dihapus!',
        //             icon: 'warning',
        //             showConfirmButton: true,
        //         });
        //     } else {
        //         Swal.fire({
        //             title: 'Hapus Data?',
        //             html: `<p class="mg-b-10">Anda akan menghapus <b>${jmldata.length} data</b> pengguna</p>`,
        //             icon: 'warning',
        //             showCancelButton: true,
        //             showConfirmButton: true,
        //             cancelButtonColor: '#d33',
        //             confirmButtonColor: '#3085d6',
        //             cancelButtonText: 'Tidak, batalkan',
        //             confirmButtonText: 'Ya, proses',
        //         }).then((result) => {
        //             if (result.value) {
        //                 $.ajax({
        //                     type: "POST",
        //                     url: $(this).attr('action'),
        //                     data: $(this).serialize(),
        //                     dataType: "JSON",
        //                     success: function(response) {
        //                         if (response.sukses) {
        //                             Toast.fire({
        //                                 icon: "success",
        //                                 html: response.sukses,
        //                             });
        //                             $('#checkAll').prop('checked', false);
        //                             $('#viewTable').DataTable().ajax.reload();
        //                         }
        //                     },
        //                     error: function(xhr, ajaxOptions, thrownError) {
        //                         alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
        //                     },
        //                 });
        //             }
        //         });
        //     }
        //     return false;
        // });
    });

    function _getPengguna() {
        $('#viewTable').DataTable({
            responsive: true,
            processing: false,
            serverSide: false,
            language: {
                searchPlaceholder: 'Cari...',
                sSearch: '',
                lengthMenu: '_MENU_',
                emptyTable: 'Data tidak tersedia',
            },
            "order": [],
            "columnDefs": [{
                "targets": [0, 2],
                "orderable": false
            }, ],
            "columns": [{
                    "data": "cek"
                },
                {
                    "data": "col"
                },
                {
                    "data": "action"
                },
            ],
            "ajax": "<?= site_url('Pengguna/getData') ?>",
        });
    }

    function _active(user_id, id_person, nama_lengkap) {
        // active type
        $.ajax({
            type: "POST",
            url: "<?= site_url('Pengguna/active') ?>",
            data: {
                user_id: user_id
            },
            dataType: "JSON",
            success: function(response) {
                if (response.sukses) {
                    toastr.success(`anda telah mengaktifkan akun <b>${nama_lengkap}</b>`);
                    $('#viewTable').DataTable().ajax.reload();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            },
        });
    }

    function _deactive(user_id, id_person, nama_lengkap) {
        //  deactive type
        $.ajax({
            type: "POST",
            url: "<?= site_url('Pengguna/deactive') ?>",
            data: {
                user_id: user_id
            },
            dataType: "JSON",
            success: function(response) {
                if (response.sukses) {
                    toastr.warning(`anda telah menonaktifkan akun <b>${nama_lengkap}</b>`);
                    $('#viewTable').DataTable().ajax.reload();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            },
        });
    }

    function _delData(user_id, id_person, nama_lengkap) {
        if (confirm(`Anda yakin menghapus data ${nama_lengkap} ?`)) {
            $.ajax({
                type: "POST",
                url: "<?= site_url('Pengguna/del_data') ?>",
                data: {
                    user_id: user_id
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.sukses) {
                        toastr.error(`anda telah menghapus akun <b>${nama_lengkap}</b>`);
                        $('#viewTable').DataTable().ajax.reload();
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                },
            });
        }
    }

    function _resetPassword(user_id, id_person, nama_lengkap) {
        if (confirm(`Anda yakin mereset password akun ${nama_lengkap} ?`)) {
            $.ajax({
                type: "POST",
                url: "<?= site_url('Pengguna/reset_password') ?>",
                data: {
                    user_id: user_id
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.sukses) {
                        toastr.info(`anda berhasil mereset password akun <b>${nama_lengkap}</b>`);
                        $('#viewTable').DataTable().ajax.reload();
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                },
            });
        }
    }
</script>