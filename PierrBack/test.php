                // Verifie si l'image est valide
                $target_dir = "../img/img_articles/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $image_name = basename($_FILES["image"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    //echo "File is an image - " . $check["mime"] . "\n";
                    $lien_photo = $image_name;
                } else {
                    echo "Le fichier n'est pas une image.";
                }

                // Upload de l'image
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    //echo "Upload de l'image réussi\n";
                } else {
                    //echo "Echec lors de l'upload\n";
                }



