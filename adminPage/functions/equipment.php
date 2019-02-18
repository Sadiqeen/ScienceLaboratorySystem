<?PHP

session_start();

class equipment 
{
    public function updateStatus($mysqli, $brId, $status)
    {
        $stmt = "UPDATE `borrow_equipment` SET `status`= $status WHERE `id` = $brId";
        if ($mysqli->query($stmt)) {
            self::returnValue(1);
        } else {
            self::returnValue($mysqli->query($stmt));
        }
    }

    public function allowBrEq($mysqli, $brId, $status, $option)
    {
        $result = 0;
        $eqId = 0;
        $stmt = "SELECT e.Quantity as eq ,b.Quantity as br ,b.equipment_id as id 
                    FROM equipment e,  borrow_equipment b
                    WHERE b.id = $brId AND e.id = b.equipment_id";
        if ($result = $mysqli->query($stmt)) {
            while( $row = mysqli_fetch_array($result) ){
                if ($option == 1) {
                    $total = $row['eq'] - $row['br'];
                } else {
                    $total = $row['eq'] + $row['br'];
                }
                $eqId = $row['id'];
                $stmt1 = "UPDATE `borrow_equipment` SET `status`= $status WHERE `id` = $brId";
                $stmt2 = "UPDATE `equipment` SET `Quantity`= $total WHERE `id` = $eqId";
                if ($mysqli->query($stmt1) && $mysqli->query($stmt2)) {
                    self::returnValue(1);
                } else {
                    self::returnValue($mysqli->query($stmt1));
                }
            }
        } else {
            self::returnValue($mysqli->query($stmt));
        }

    }

    public function getInfoBr($mysqli, $brId)
    {
        $stmt = "SELECT 
                        b.equipment_id,
		                e.Equipment,
                        e.Price,
                        e.Quantity as qt,
       	                a.Brand,
                        b.user_id,
                        u.fname,
                        u.lname,
                        d.department,
                        u.phone_number,
                        u.email,
                        b.Quantity,
                        b.borrow_date,
                        b.return_date
        
                FROM 
                    borrow_equipment b,
                    e_brand a,
                    user_info u, 
                    equipment e,  
                    department d
                WHERE u.user_id = b.user_id
                AND b.equipment_id = e.id
                AND e.brand = a.id
                AND u.department_id = d.id
                AND b.id =  $brId";
        $data = array();
        if ($result = $mysqli->query($stmt)) {
            while( $row = mysqli_fetch_array($result) ){
                $data[] = array(
                    'equipment_id' => $row['equipment_id'],
                    'Equipment' => $row['Equipment'],
                    'Price' => $row['Price'],
                    'qt' => $row['qt'],
                    'Brand' => $row['Brand'],
                    'user_id' => $row['user_id'],
                    'name' => $row['fname'].' '.$row['lname'],
                    'department' => $row['department'],
                    'phone_number' => $row['phone_number'],
                    'email' => $row['email'],
                    'Quantity' => $row['Quantity'],
                    'borrow_date' => date("d/m/Y", strtotime($row['borrow_date'])),
                    'return_date' => date("d/m/Y", strtotime($row['return_date'])),
                    );
            }
            self::returnValue($data);
        } else {
            self::returnValue($mysqli->query($stmt));
        }

    }

    public function returnEq($mysqli, $brId, $eqRt) {
        $stmt = "UPDATE `borrow_equipment` SET `Quantity_return`= $eqRt WHERE `id` = $brId";
        if ($mysqli->query($stmt)) {
            self::returnValue(1);
        } else {
            self::returnValue($mysqli->query($stmt));
        }
    }

    protected function returnValue($value)
    {
        echo json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
    
?>