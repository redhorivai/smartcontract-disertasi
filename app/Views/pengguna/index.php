<?= $this->extend('layout/main_layout'); ?>
<!-- MAIN CONTENT -->
<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">

        <h3 class="card-title"><?= $title;?></h3>
        <div style="margin-top: 20px;">
            <button class="btn btn-info">
                <span><i class="m-r-20 mdi mdi-grease-pencil"></i></span>
                <span>TAMBAH DATA</span>
            </button>
        </div>
        <div class="table-responsive" style="margin-top: 30px;">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;">DATA PENGGUNA</th>
                        <th style="width: 20%;text-align:center;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                    </tr> -->
                </tbody>
                <tfoot>
            </table>
        </div>

    </div>
</div>




<?= $this->endSection() ?>
<!-- END CONTENT -->