<?PHP

session_start();

class chemical 
{
    public function updateStatus($mysqli, $brId, $status)
    {
        $stmt = "UPDATE `borrow_chemical` SET `status`= $status WHERE `id` = $brId";
        if ($mysqli->query($stmt)) {
            self::returnValue(1);
        } else {
            self::returnValue($mysqli->query($stmt));
        }
    }

    public function getInfoBr($mysqli, $brId)
    {
        $stmt = "SELECT 
                b.`chemical_id`, 
                c.chemical,
                c.chemical_fomula, 
                c.expire_date,
                s.Place, b.user_id, 
                u.fname, u.lname, 
                d.department, 
                u.phone_number, 
                u.email,
                b.Consentration,
                b.Quantity,
                b.borrow_date
                FROM 
                borrow_chemical b, 
                user_info u, 
                chemical c, 
                storage s, 
                department d
                WHERE u.user_id = b.user_id
                AND b.chemical_id = c.ID
                AND s.id = c.storage
                AND u.department_id = d.id
                AND b.id = $brId";
        $data = array();
        if ($result = $mysqli->query($stmt)) {
            while( $row = mysqli_fetch_array($result) ){
                $data[] = array(
                    'chemical_id' => $row['chemical_id'],
                    'chemical' => $row['chemical'],
                    'chemical_fomula' => $row['chemical_fomula'],
                    'expire_date' => date("d/m/Y", strtotime($row['expire_date'])),
                    'place' => $row['Place'],
                    'studentId' => $row['user_id'],
                    'name' => $row['fname'].' '.$row['lname'],
                    'department' => $row['department'],
                    'phone' => $row['phone_number'],
                    'email' => $row['email'],
                    'consentration' => $row['Consentration'],
                    'quantity' => $row['Quantity'],
                    'borrow_date' => date("d/m/Y", strtotime($row['borrow_date'])),
                    );
            }
            self::returnValue($data);
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