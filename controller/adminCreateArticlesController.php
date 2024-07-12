 <?php 
 
 require_once ('../Config/Config.php'); /*lignes de debug*/

  
 session_start ();

 if ($_SESSION['username']!=='LeiJie' ) { 

 header("Location: http://localhost/piscine-php-tpblog/Views/connection.php");

 } 


 function isRequestPost(){
    return $_SERVER['REQUEST_METHOD']==="POST";
}



function isFormDataValid() {
    if ( 
        isset($_POST['Title']) &&
        !empty(trim(($_POST['Title']))) && // notempty si on veut prise en compte des espaces
        !empty(trim(($_POST['Content']))) && 
        !empty(trim(($_POST['Image'])))  

     ) {
        return true;
     } else {
        return false;
     }
}
function isStringTooShort($stringToCheck, $lengthToCheck) {
	return strlen($stringToCheck) < $lengthToCheck; 
}
// bien penser a remplir les bonnes conditions pour la creation de l article !! 
 if (isRequestPost() && 
   isFormDataValid() && 
   !isStringTooShort($_POST['Title'], 3) &&  
   !isStringTooShort($_POST['Content'], 3)&&
   !isStringTooShort($_POST['Image'],60))
{ 
            
    
            $Title = $_POST['Title'];
            $Content = $_POST['Content'];
            $Image = $_POST['Image'];
            $createdAt = new DateTime();

            $handle = fopen("../articles.txt",'a'); // j ouvre avec fopen 'a' donne la permission
            $article = "le titre est :".$Title.", le contenu est :".$Content." et voici l'image :".$Image."crée le : ".$createdAt->format('y-m-d'); // $createdAt->format('y-m-d') toujours affiché avec le ->format pour une date

            var_dump($article);
            if ($handle){ 
               fwrite($handle,$article ); //alors cela va stocker la data qu on veut ca peut etre $Content $Image
   
               fclose($handle);
            }

        }
?>