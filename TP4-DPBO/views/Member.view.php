<?php

  class MemberView {
    public function render($data){
      $no = 1;
      $dataMember = null;
      foreach($data['member'] as $val){
        list($id, $name, $email, $phone, $join_date, $grup_id) = $val;
        $dataMember .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $name . "</td>
                <td>" . $email . "</td>
                <td>" . $phone . "</td>
                <td>" . date('d F Y', strtotime($join_date)) . "</td>
                <td>" . $val['grup_nama'] . "</td>
                <td>
                  <a href='index.php?id_edit=" . $id .  "' class='btn btn-warning' '>Edit</a>
                  <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
                </td>";
        $dataMember .= "</tr>";
      }

      $tpl = new Template("templates/index.html");
      $tpl->replace("DATA_TABEL", $dataMember);
      $tpl->write(); 
    }
  }
?>