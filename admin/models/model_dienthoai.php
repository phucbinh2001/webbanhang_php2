
<?php

class model_dienthoai extends model_system
{
    function store($namedt, $soluong, $thuonghieu, $gia, $giakm, $mota, $anhien, $hot, $filename)
    { //hàm lưu 1 record vào table
        if ($giakm != "")
            $sql = "INSERT INTO `dienthoai`(`TenDT`, `Gia`, `GiaKM`, `urlHinh`, `MoTa`, `Hot`, `idNSX`, `AnHien`, `SoLuongTonKho`) 
        VALUES ('$namedt','$gia','$giakm', '$filename', '$mota', '$hot', '$thuonghieu', '$anhien', '$soluong')";
        else
            $sql = "INSERT INTO `dienthoai`(`TenDT`, `Gia`, `urlHinh`, `MoTa`, `Hot`, `idNSX`, `AnHien`, `SoLuongTonKho`) 
        VALUES ('$namedt','$gia','$filename', '$mota', '$hot', '$thuonghieu', '$anhien', '$soluong')";
    
        return $kq = $this->execute($sql);
    }
    function update($namedt, $soluong, $thuonghieu, $gia, $giakm, $mota, $anhien, $hot, $filename, $idsp)
    { //hàm cập nhật 1 record vào table
        if($filename=="") {
            $sql = "UPDATE `dienthoai` SET `TenDT`='$namedt',`Gia`='$gia',`GiaKM`='$giakm',`MoTa`='$mota',
            `Hot`='$hot',`idNSX`='$thuonghieu',`AnHien`='$anhien',`SoLuongTonKho`='$soluong' WHERE idDT = $idsp";
        }else if ($giakm != "") {
            $sql = "UPDATE `dienthoai` SET `TenDT`='$namedt',`Gia`='$gia',`GiaKM`='$giakm',`urlHinh`='$filename',`MoTa`='$mota',
            `Hot`='$hot',`idNSX`='$thuonghieu',`AnHien`='$anhien',`SoLuongTonKho`='$soluong' WHERE idDT = $idsp";
        }else{
            $sql = "UPDATE `dienthoai` SET `TenDT`='$namedt',`Gia`='$gia', `urlHinh`='$filename',`MoTa`='$mota',
        `Hot`='$hot',`idNSX`='$thuonghieu',`AnHien`='$anhien',`SoLuongTonKho`='$soluong' WHERE idDT = $idsp";
        }
        return $kq = $this->execute($sql);
        
    }
    function delete($id)
    {  //hàm xóa 1 record khỏi table
        $sql = "DELETE FROM `dienthoai` WHERE idDT = $id";
        return $this->execute($sql);
    }
    function listrecords()
    { //hàm lấy các record trong table
        $sql = "SELECT dt.* , nsx.TenNSX FROM dienthoai dt inner join nhasanxuat nsx on dt.idNSX = nsx.idNSX order by idDT desc";
        $kq = $this->query($sql);
        return $kq;
    }
    function detailrecord($id)
    { //hàm lấy chi tiết 1 record trong table
        $sql = "SELECT * FROM dienthoai where idDT = $id";
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
    function getThuongHieu()
    {
        $sql = "SELECT TenNSX, idNSX FROM nhasanxuat";
        $kq = $this->query($sql);
        return $kq;
    }
}
