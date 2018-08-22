<?php
class getValue

	{
	public static function values()
		{
		include '../../../language/sq_SQ/lang.sq.php';

		$id = $_REQUEST['id'];
		$param = array(
			':url' => $id
		);
		$markers = DB::query('SELECT * FROM markers WHERE url=:url', $param);
		foreach($markers as $key)
			{
			$table = $key['type'];
			}

		if ($table == 'electronics')
			{
			$tablename = 'elektronike';
			$related_map = 'elektronike_related_map';
			}

		if ($table == 'postoffice-us')
			{
			$tablename = 'work';
			$related_map = 'work_related_map';
			}

		if ($table == 'bus')
			{
			$tablename = 'car';
			$related_map = 'car_related_map';
			}

		if ($table == 'homegardenbusiness')
			{
			$tablename = 'shtepineshitje';
			$related_map = 'shtepi_related_map';
			}

		if ($table == 'salon')
			{
			$tablename = 'shtepimeqera';
			$related_map = 'shtepi_related_map';
			}

		$arr = array(
			':related_map' => $id
		);
		$values = DB::query('SELECT * FROM ' . $tablename . ' WHERE ' . $related_map . ' = :related_map', $arr);
		$columnname = DB::query('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA="gps" 
                        AND TABLE_NAME="' . $tablename . '"');
        $arr = array();
		foreach($columnname as $col)
			{
			$colname = $col['COLUMN_NAME'];
			foreach($values as $val)
				{
				$value = $val[$colname];
				if ($value != null)
					{
					$vals = $lang[$colname] . $value . "<hr>";
                    array_push($arr, $vals);
                    }
				}
            }
            return $arr;
        }
        
        public static function getPhotos(){
            $id = $_REQUEST['id'];
            $photos = DB::query('SELECT * FROM photos WHERE post_id=:post_id', array(':post_id'=>$id));
            $array = array();
            foreach($photos as $ph){
                $key = $ph['photo_name'];
                array_push($array, $key);
            }
            return $array;
        }
	}

?>
