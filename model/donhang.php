<?php
class DONHANG
{
	private $db;

	public function __construct()
	{
		$this->db = DATABASE::connect();
		if (!$this->db) {
			exit("Lỗi kết nối cơ sở dữ liệu!");
		}
	}

	// Thêm đơn hàng mới, trả về khóa của dòng mới thêm
	public function themdonhang($nguoidung_id, $diachi_id, $tongtien)
	{
		try {
			$sql = "INSERT INTO donhang(nguoidung_id, diachi_id, tongtien) 
                    VALUES(:nguoidung_id, :diachi_id, :tongtien)";
			$cmd = $this->db->prepare($sql);
			$cmd->bindValue(':nguoidung_id', $nguoidung_id);
			$cmd->bindValue(':diachi_id', $diachi_id);
			$cmd->bindValue(':tongtien', $tongtien);
			$cmd->execute();
			return $this->db->lastInsertId();
		} catch (PDOException $e) {
			echo "<p>Lỗi truy vấn: " . $e->getMessage() . "</p>";
			exit();
		}
	}

	// Đọc danh sách tất cả đơn hàng
	public function doctatcadonhang()
	{
		try {
			$sql = "SELECT *, ct.id as ctid, dh.id as dhid 
                    FROM nguoidung nd, donhang dh, donhangct ct, diachi dc 
                    WHERE nd.id = dh.nguoidung_id 
                    AND ct.donhang_id = dh.id 
                    AND dc.id = dh.diachi_id 
                    ORDER BY dh.id";
			$cmd = $this->db->prepare($sql);
			$cmd->execute();
			return $cmd->fetchAll();
		} catch (PDOException $e) {
			echo "<p>Lỗi truy vấn: " . $e->getMessage() . "</p>";
			exit();
		}
	}

	// Xóa đơn hàng theo ID
	public function xoadonhang($id)
	{
		try {
			// Xóa tất cả sản phẩm liên quan trong donhangct trước
			$sql1 = "DELETE FROM donhangct WHERE donhang_id = :id";
			$stmt1 = $this->db->prepare($sql1);
			$stmt1->bindParam(":id", $id);
			$stmt1->execute();

			// Xóa đơn hàng sau khi đã xóa dữ liệu liên quan
			$sql2 = "DELETE FROM donhang WHERE id = :id";
			$stmt2 = $this->db->prepare($sql2);
			$stmt2->bindParam(":id", $id);

			return $stmt2->execute();
		} catch (PDOException $e) {
			echo "<p>Lỗi xóa đơn hàng: " . $e->getMessage() . "</p>";
			return false;
		}
	}


}
?>