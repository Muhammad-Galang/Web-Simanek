
<!-- start konten table -->
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Responsive example<small>Users</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row">
        <div class="col-sm-12">
          <div class="card-box table-responsive">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Id pengguna</th>
                  <th>Nomer Induk</th>
                  <th>Nama Pengguna</th>
                  <th>Nama Lengkap</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Foto Profil</th>
                  <th>Level Pengguna</th>
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th>Kata Sandi</th>
                </tr>
              </thead>
              <tbody>
                <?//= foreach ($data['usr'] as $DataUsr) : ?>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <?//= endforeach; ?>
                <tr>
                  <td>Jena</td>
                  <td>Gaines</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>30</td>
                  <td>2008/12/19</td>
                  <td>$90,560</td>
                  <td>3814</td>
                  <td>j.gaines@datatables.net</td>
                </tr>
                <tr>
                  <td>Quinn</td>
                  <td>Flynn</td>
                  <td>Support Lead</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2013/03/03</td>
                  <td>$342,000</td>
                  <td>9497</td>
                  <td>q.flynn@datatables.net</td>
                </tr>
                <tr>
                  <td>Charde</td>
                  <td>Marshall</td>
                  <td>Regional Director</td>
                  <td>San Francisco</td>
                  <td>36</td>
                  <td>2008/10/16</td>
                  <td>$470,600</td>
                  <td>6741</td>
                  <td>c.marshall@datatables.net</td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- finish konten table -->
