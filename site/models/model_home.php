<?php
require_once '../system/model_system.php';
class model_home extends model_system
{
    function sanphamMoi($sosp = 8)
    {
        $sql = "SELECT * FROM dienthoai WHERE AnHien=1 ORDER BY ThoiDiemNhap DESC LIMIT 0, $sosp";
        $kq = $this->query($sql);
        return $kq;
    }
    function sanphamChay($sosp = 5)
    {
        $sql = "SELECT * FROM dienthoai WHERE AnHien=1 ORDER BY SoLanMua DESC LIMIT 0, $sosp";
        $kq = $this->query($sql);
        return $kq;
    }
    function detail($id)
    {
        $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND idDT=$id";
        $kq = $this->query($sql);
        if (!$kq) return FALSE;
        $row = $kq->fetch();
        return $row;
    }
    function thuoctinhdt($id)
    {
        $sql = "SELECT * FROM thuoctinhdt WHERE idDT=$id";
        $kq = $this->query($sql);
        if (!$kq) return FALSE;
        $row = $kq->fetch();
        return $row;
    }
    function sanphamtheoNSX($idNSX)
    {
        $sql = "SELECT * FROM dienthoai WHERE AnHien=1 AND idNSX=$idNSX 
            ORDER BY ThoiDiemNhap DESC";
        $kq = $this->query($sql);
        return $kq;
    }
    function nhaSX()
    {
        $sql = "SELECT * FROM nhasanxuat WHERE AnHien=1 ORDER BY idNSX DESC";
        $kq = $this->query($sql);
        return $kq;
    }
    function getBrandName($idNSX) {
        $sql = "SELECT TenNSX FROM nhasanxuat WHERE idNSX=$idNSX";
        $kq = $this->queryOne($sql);
        return $kq['TenNSX'];
    }
}//class 