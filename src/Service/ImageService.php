<?php
namespace App\Service;


/**
 * MediaService
 */
class ImageService{

    private $message;

    public function __construct(){
       $message = 'hello';
    }

    public function createFolder($year,$month,$day,$image)
    {
        $dir = $image ;
        if (!\file_exists($dir)) {
            mkdir($dir, 0777);
        }
        $dir .=DIRECTORY_SEPARATOR. $year;
        if (!\file_exists($dir)) {
            mkdir($dir, 0777);
        }
        $dir .=DIRECTORY_SEPARATOR. $month;
        if (!\file_exists($dir)) {
            mkdir($dir, 0777);
        }
        $dir .=DIRECTORY_SEPARATOR. $day;
        if (!\file_exists($dir)) {
            mkdir($dir, 0777);
        }
        return $dir;
    }
    

    public function cropImage($image,$destination,$largeur,$hauteur)
    {
       dd($image,$destination,$largeur,$hauteur);
    }

    public function Format(): array{
        $formats = ["s" => '100x100',"m" => "200x200", "l" => "300x300"];
        return $formats;
    }
}
?>