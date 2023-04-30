<? php 
    $mysqli = false;
    function connectDB () {
        global $mysqli;
        $mysqli = new mysqli ("localhost", "root", "", "slidertext");
        $mysqli->query("SET NAMES 'utf-8'");
    }

    fuction closeDB () {
        global $mysqli;
        $mysqli->close ();
    }

    function getNews ($limit) {
        global $mysqli;
        connectDB();
        $result = $mysqli->("SELECT * FROM `slidertext` ORDER BY 'id' DESC LIMIT $limit");
        closeDB();
        return resultToArray ($result);

    }

    function resultToArray ($result) {
        $array = array ();
        while (($row = $result->fetch_assoc()) != false)
            $array[] = $row;
        return $array;
    }
?>