<?php
require_once("db.php");
require ("Mnotfications.php");
include "MuserType.php";
include "Muser.php";


 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
            
//AbstractObserver(client)
abstract class us {
    public $userid;
//    public $value;
    
    abstract function send(Message $subject_in);//update
}
//AbstractSubject
abstract class Message {
    abstract function AddUser(us $u);//attach
    abstract function removeUser(us $u);//detach
    abstract function notify();
}

function writeln($line_in) {
    echo $line_in."<br/>";
}

class NormalUser extends us { //PatternObserver
    public function __construct($userid) {
        $this->userid=$userid;
    }
    public function send(Message $subject) {
        $n=new Notfications($this->userid,$subject->getMessage());
         $n->insert();
    }
}
class PremiumUser extends us { //PatternObserver
    public function __construct($userid) {
        $this->userid=$userid;
    }
    public function send(Message $subject) {
 
        $n=new Notfications($this->userid,$subject->getMessage());
        $n->insert();
        
    }
}

class clientGroup extends Message { //PatternSubject
    private $text = NULL;//$favoritePatterns
    private $users = array();//$observers
    
    function AddUser(us $u) {
      //could also use array_push($this->observers, $u);
      $this->users[] = $u;
    }
    function removeUser(us $u) {
      //$key = array_search($u, $this->observers);
      foreach($this->users as $okey => $oval) {
        if ($oval == $u) { 
          unset($this->users[$okey]);
        }
      }
    }
    function notify() {
      foreach($this->users as $obs) {
        $obs->send($this);
      }
    }
    function sendMessage($newFavorites) {//updateFavorites
      $this->text = $newFavorites;
      $this->notify();
    }
    function getMessage() {//getFavorites
      return $this->text;
    }
}

$obj=UserType::select();
for($i=0;$i<count($obj);$i++){?>
<script>
$("#view").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->UserTypeName; ?> </option>");
</script>
<?php
}
if(isset($_POST['v']))
{
$v = $_POST["view"];	
$obj=User::View($v);
for($i=0;$i<count($obj);$i++){?>
<script>
$("#un").append("<option value= <?php echo $obj[$i]->ID; ?> > <?php echo $obj[$i]->FullName; ?> </option>");
</script>
<?php } } 

$u = $_POST["un"];
$c = new clientGroup();
$user = new NormalUser($u);
$c->AddUser($user);
$m = $_POST["message"];
$c->sendMessage($m); 
?>