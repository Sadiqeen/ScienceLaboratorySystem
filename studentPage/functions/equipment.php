<?php
session_start();

class equipment
{
    public function check($mysqli, $eqId)
    {
        $stmt = "SELECT * FROM borrow_equipment b WHERE b.user_id = '" . $_SESSION["id"] . "' AND b.equipment_id = '" . $eqId . "' AND (b.status BETWEEN 2 AND 5)";
        if ($result = $mysqli->query($stmt)) {
            if (mysqli_num_rows($result) > 0) {
                self::returnValue("รายการอุปกรณ์นี้อยู่ระหว่างดำเนินการ");
            } else {
                self::returnValue(1);
            }
        } else {
            self::returnValue($mysqli->query($stmt));
        }
    }

    public function insert($mysqli, $eqId, $eqBrDate, $eqBrQt, $_return_date)
    {
        if (self::checkQt($mysqli, $eqId, $eqBrQt)) {
            $stmt = "INSERT INTO `borrow_equipment`(`user_id`, `equipment_id`, `Quantity`, `borrow_date`, `return_date`, `status`)
                   VALUES ('" . $_SESSION["id"] . "', '$eqId', '$eqBrQt', '$eqBrDate', '$_return_date',2)";
            if ($mysqli->query($stmt)) {
                self::returnValue(1);
            } else {
                self::returnValue($mysqli->query($stmt));
            }
        } else {
            self::returnValue("รายการอุปกรณ์นี้มีไม่เพียงพอ");
        }
    }

    private function checkQt($mysqli, $eqId, $eqBrQt)
    {
        $stmt = "SELECT e.Quantity FROM equipment e WHERE e.id = '$eqId'";
        $result = mysqli_query($mysqli, $stmt);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $eqQtDb = $row['Quantity'];
            if ($eqQtDb > $eqBrQt) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function updateDataBr($mysqli, $brEqId, $eqId, $brEqQt)
    {
        if (self::checkQt($mysqli, $eqId, $brEqQt)) {
            $stmt = "UPDATE `borrow_equipment` SET `Quantity`='$brEqQt' WHERE `id` = '$brEqId'";
            if ($mysqli->query($stmt)) {
                self::returnValue(1);
            } else {
                self::returnValue($mysqli->query($stmt));
            }
        } else {
            self::returnValue("รายการอุปกรณ์นี้มีไม่เพียงพอ");
        }
    }

    public function cancelBr($mysqli, $brEqId)
    {
        $stmt = "UPDATE `borrow_equipment` SET `status`='8' WHERE  `id` IN ('$brEqId')";
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
