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
    

    public function cropImage($image,$destination,$largeur=0,$hauteur=0,$ext)
    {
        $dimention = @getimagesize($image);
        $ratio = $dimention[1] / $dimention[2];

        if ($largeur==0 && $hauteur==0) { $largeur = $dimention[0];    $hauteur = $dimention[1]; }
        else if ($hauteur == 0) { $hauteur = round($largeur / $ratio); }
        else if($largeur == 0){ $largeur = round($hauteur * $ratio); }

        if ($dimention[0]>($largeur/$hauteur)*$dimention[1]) {$dimY=$hauteur; $dimX=round($hauteur*$dimention[0]/$dimention[1]); }
        if ($dimention[0]<($largeur/$hauteur)*$dimention[1]) {$dimY=$largeur; $dimX=round($largeur*$dimention[0]/$dimention[1]); }
        if ($dimention[0]==($largeur/$hauteur)*$dimention[1]) {$dimY=$largeur; $dimX=$hauteur; }


        $miniature = @imagecreatetruecolor($hauteur,$largeur);

        if ($ext == ".jpg" || $ext == ".JPG" || $ext == ".jpeg" || $ext == ".JPEG" ) { $img = @imagecreatefromjpeg($image);}
        if ($ext  == ".png" || $ext  == ".PNG") { $img = @imagecreatefrompng($image);}
        
        @imagecopyresampled($miniature,$img,0,0,0,0,$dimY,$dimX,$dimention[0],$dimention[1]);
        @imagejpeg($miniature,$destination,90);


        return true;
    }

    public function Format(): array{
        $formats = ["s" => '100x100',"m" => "200x200", "l" => "300x300"];
        return $formats;
    }
}
?>