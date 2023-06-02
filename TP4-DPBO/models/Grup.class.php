<?php

class Grup extends DB
{
    function getGrup()
    {
        $query = "SELECT * FROM grup";
        return $this->execute($query);
    }

    function getGrupById($id)
    {
        $query = "SELECT * FROM grup WHERE grup_id=$id";
        return $this->execute($query);
    }

    function add($data)
    {
        $nama = $data['grupname'];
        $query = "INSERT INTO grup VALUES('', '$nama')";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $delmem = "DELETE FROM member WHERE grup_id = '$id'";
        $this->execute($delmem);
        $query = "DELETE FROM grup WHERE grup_id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($id, $data)
    {
        $nama = $data['grupname'];
        $query = "UPDATE grup SET grup_nama = '$nama' WHERE grup_id = $id";
        return $this->execute($query);
    }
}
