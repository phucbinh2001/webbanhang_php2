<?php

class model_nhasanxuat extends model_system
{
    function store($tennsx, $thutu, $anhien)
    { //hàm lưu 1 record vào table
        if($anhien == "on")
            $anhien = 1;
        else $anhien = 0;
        if($thutu=="")
        $sql = "INSERT INTO `nhasanxuat`(`TenNSX`, `AnHien`) VALUES ('$tennsx', '$anhien')";
        else
        $sql = "INSERT INTO `nhasanxuat`(`TenNSX`, `ThuTu`, `AnHien`) VALUES ('$tennsx', '$thutu', '$anhien')";
        return $kq = $this->execute($sql);
    }
    function update($id,$tennsx, $thutu, $anhien)
    { //hàm cập nhật 1 record vào table
        if($anhien == "on")
            $anhien = 1;
        else $anhien = 0;
        if($thutu=="")
        $sql = "UPDATE `nhasanxuat` SET `TenNSX`='$tennsx',`ThuTu`=Null,`AnHien`='$anhien' where idNSX = $id";
        else
        $sql = "UPDATE `nhasanxuat` SET `TenNSX`='$tennsx',`ThuTu`='$thutu',`AnHien`='$anhien' where idNSX = $id";
        return $kq = $this->execute($sql);
        
    }
    function delete($id)
    {  //hàm xóa 1 record khỏi table
        $sql = "DELETE FROM `nhasanxuat` WHERE idNSX = $id";
        return $this->execute($sql);
    }
    function listrecords()
    { //hàm lấy các record trong table
        $sql = "SELECT * FROM nhasanxuat order by idNSX desc";
        $kq = $this->query($sql);
        return $kq;
    }
    function detailrecord($id)
    { //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM nhasanxuat where idNSX = $id";
        $kq = $this->queryOne($sql);
        return $kq;
    }
    function countNsx()
    {
        $sql = "SELECT COUNT(*) as 'soluong' FROM nhasanxuat";
        $kq = $this->queryOne($sql);
        return $kq['soluong'];
    }
    function countDt()
    {
        $sql = "SELECT COUNT(*) as 'soluong' FROM dienthoai";
        $kq = $this->queryOne($sql);
        return $kq['soluong'];
    }
    function countDh()
    {
        $sql = "SELECT COUNT(*) as 'soluong' FROM donhang";
        $kq = $this->queryOne($sql);
        return $kq['soluong'];
    }
    function countBl()
    {
        $sql = "SELECT COUNT(*) as 'soluong' FROM binhluan";
        $kq = $this->queryOne($sql);
        return $kq['soluong'];
    }
}
