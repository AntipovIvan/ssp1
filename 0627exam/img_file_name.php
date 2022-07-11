<?php 

    function img_file_name() {
        $f = "upload";
        $dir = "upload/";
        $img = "";

        if ($_FILES[$f]["name"] == "") {
            return $img;
        }

        $ext = "";
        if ($_FILES[$f]["type"] == "image/gif") {
            $ext = "gif";
        } else if($_FILES[$f]["type"] == "image/jpeg") {
            $ext = "jpg";
        }
        if ($ext == "") {
            exit("Incorrect format cant register");
        } else {
            $imgname = date("Ymd-His")
                ."-"
                .rand(1000,9999)
                ."."
                .$ext;
            if (move_uploaded_file($_FILES[$f]["tmp_name"], $dir.$imgname)) {
                $img = $imgname;
            }
            else {
                exit("Image upload failed");
            }
        }
        return $img;
    }

?>