<?php  
	class database
	{
		var $_dbh = '';
		var $_sql = '';
		var $_cursor = NULL;

		// kết nối trong hàm khởi tạo class
		function __construct()
		{
			try 
			{
				$this->_dbh = new PDO('mysql:host=localhost;dbname=cleanseed','root','');
				$this->_dbh->query("set names utf8");
			} catch (PDOException $e) 
			{
				die($e->getMessage());
			}
		}

		//gán câu lệnh truy vấn
		public function setQuery($sql){
			$this->_sql = $sql;
		}

		// phương thức xử lý truy vấn dữ liệu
		public function execute($options = array()){
			$this->_cursor = $this->_dbh->prepare($this->_sql);
			if ($options) {
				for ($i=0; $i < count($options); $i++) { 
					$this->_cursor->bindParam($i+1,$options[$i]);
				}
			}
			$this->_cursor->execute();
			return $this->_cursor;
		}

		// hiển thị nhiều data
		public function loadAllRow($options = array()){
			if (!$options) {
				if (!$result = $this->execute()) 
					return false;
			}else {
				if (!$result = $this->execute($options)) 
					return false;	
			}
			return $result->fetchAll(PDO::FETCH_OBJ);
		}

		// hiển thị 1 data trong table
		public function loadRow($options = array()){
			if (!$options) {
				if (!$result = $this->execute()) {
					return false;
				}
			}else
			{
				if (!$result = $this->execute($options)) {
					return false;
				}
			}

			return $result->fetch(PDO::FETCH_OBJ);
		}


		// Đếm số bản ghi 
		public function loadRecord($options = array()){
			if (!$options) {
				if (!$result = $this->execute()) {
					return false;
				}
			}else
			{
				if (!$result = $this->execute($options)) {
					return false;
				}
			}
			return $result->fetch(PDO::FETCH_COLUMN);
		}

		// Lấy id cuối cùng
		public function getLastId(){
			return $this->_dbh->lastInsertId();
		}


		// Hủy kết nối CSDL
		public function disconnect(){
			$this->_dbh = NULL;
		}


	}
?>