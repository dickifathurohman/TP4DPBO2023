<?php
  include_once("conf.php");
  include_once("models/Grup.class.php");

  class GrupView{

    public function render($data, $id_selected){

      $no = 1;
      $dataGrup = null;
      foreach($data['grup'] as $val){
        list($id, $nama) = $val;
        $dataGrup .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $nama . "</td>
                <td>
                <a href='grup.php?id_edit=" . $id .  "' class='btn btn-warning''>Edit</a>
                <a href='grup.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                </td>
            </tr>";
      }

      if(!empty($id_selected)){

        foreach ($data['selected'] as $val) {
          list($id, $nama) = $val;
          $form = '<form action="grup.php" method="POST">
            <div class="form-row">
              <div class="form-group mt-3">
                <input type="hidden" name="id" value="' . $id_selected . '">
                <label for="grupname">Nama Grup</label>
                <div class="d-flex">
                  <input type="text" class="form-control" name="grupname" value="' . $nama . '" required />
                  <button type="submit" name="edit" class="btn btn-primary" style="margin-left: 20px;">Update</button>
                </div>
              </div>
            </div>
          </form>';
        }

      }
      else{

        $form = '<form action="grup.php" method="POST">
          <div class="form-row">
            <div class="form-group mt-3">
              <label for="grupname">Nama Grup</label>
              <div class="d-flex">
                <input type="text" class="form-control" name="grupname" required />
                <button type="submit" name="add" class="btn btn-primary" style="margin-left: 20px;">Tambah</button>
              </div>
            </div>
          </div>
        </form>';

      }

      $tpl = new Template("templates/grup.html");
      $tpl->replace("FORM_INPUT", $form);
      $tpl->replace("DATA_TABEL", $dataGrup);
      $tpl->write();
    }
  }