<?php
class SinhVienModel extends DB{
    // Hàm lấy tất cả mục
    public function Get_all () {
        $qr = "SELECT * FROM tbl_admin";
        $result = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_assoc($result)) {
            $mang[] = $row;
        }
        return $mang;
    }

    // Hàm lấy từng mục
    public function Get_one ($id) {
        $qr = "SELECT * FROM tbl_admin WHERE id = {$id}";
        $result = mysqli_query($this->con, $qr);
        return mysqli_fetch_assoc($result);
    }

    // Hàm check user
    public function CheckUser($user, $pass) {
        $qr = "SELECT * FROM tbl_admin WHERE user= '".$user."' AND pass = '".$pass."' ";
        $result = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_assoc($result)) {
            $mang[] = $row;
        }
        if(count($mang)>0) return $mang[0]['role'];
        else return 0;
    }
        
}
?>