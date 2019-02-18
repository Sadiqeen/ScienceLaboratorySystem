<?php
session_start();

class chemical
{
    public function check($mysqli, $chId)
    {
        $stmt = "SELECT * FROM borrow_chemical b WHERE b.user_id = '" . $_SESSION["id"] . "' AND b.chemical_id = '" . $chId . "' AND (b.status BETWEEN 2 AND 5)";
        if ($result = $mysqli->query($stmt)) {
            if (mysqli_num_rows($result) > 0) {
                self::returnValue("รายการสารเคมีนี้อยู่ระหว่างดำเนินการ");
            } else {
                self::returnValue(1);
            }
        } else {
            self::returnValue($mysqli->query($stmt));
        }
    }

    public function insert($mysqli, $chId, $chBrDate, $chBrCs, $chBrQt)
    {
        $stmt = "INSERT INTO `borrow_chemical`(`user_id`, `chemical_id`, `Consentration`, `borrow_date`, `Quantity`, `status`)
                  VALUES ('" . $_SESSION["id"] . "','$chId','$chBrCs','$chBrDate','$chBrQt',2)";
        if ($mysqli->query($stmt)) {
            self::returnValue(1);
        } else {
            self::returnValue($mysqli->query($stmt));
        }
    }

    public function updateDataBr($mysqli, $brChId, $brChCs, $brChQt)
    {
        $stmt = "UPDATE `borrow_chemical` SET `Consentration`= '$brChCs', `Quantity`= ' $brChQt' WHERE `id` = '$brChId'";
        if ($mysqli->query($stmt)) {
            self::returnValue(1);
        } else {
            self::returnValue($mysqli->query($stmt));
        }
    }

    public function cancelBr($mysqli, $brChId)
    {
        $stmt = "UPDATE `borrow_chemical` SET `status`= '8' WHERE `id` IN ('$brChId')";
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
