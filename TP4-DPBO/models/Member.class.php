<?php

class Member extends DB
{
    function getMember()
    {
        $query = "SELECT * FROM member JOIN grup ON member.grup_id=grup.grup_id ORDER BY member.id";
        return $this->execute($query);
    }

    function getMemberById($id){
        $query = "SELECT * FROM member WHERE id=$id";
        return $this->execute($query);
    }

    function add($data)
    {
        $nama = $data['nama'];
        $email = $data['email'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];
        $grup_id = $data['grup_id'];

        $query = "INSERT INTO member VALUES ('', '$nama', '$email', '$phone', '$join_date', '$grup_id')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "DELETE from member WHERE id= '$id' ";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($id, $data){

        $nama = $data['nama'];
        $email = $data['email'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];
        $grup_id = $data['grup_id'];

        $query = "UPDATE member 
                SET name ='$nama', 
                email='$email', 
                phone='$phone', 
                join_date='$join_date',
                grup_id ='$grup_id'
                WHERE id='$id'";
        
        return $this->execute($query);
    }

}


?>