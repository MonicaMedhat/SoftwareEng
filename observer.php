<?php
require_once("db.php");
require_once("Mnotfications.php");
 $db_obj = new dbconnect;
		$con = $db_obj->connect();
        $con->set_charset("utf8");
        header('Content-Type: text/html; charset=utf-8');






    
    
//AbstractObserver(client)
abstract class User {
    public $userid;
//    public $value;
    
    abstract function send(Message $subject_in);//update
}
//AbstractSubject
abstract class Message {
    abstract function AddUser(User $u);//attach
    abstract function removeUser(User $u);//detach
    abstract function notify();
}

function writeln($line_in) {
    echo $line_in."<br/>";
}

class NormalUser extends User { //PatternObserver
    public function __construct($userid) {
        $this->userid=$userid;
    }
    public function send(Message $subject) {
        $n=new Notfications($this->userid,$subject->getMessage());
         $n->insert();
    }
}
class PremiumUser extends User { //PatternObserver
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
    
    function AddUser(User $u) {
      //could also use array_push($this->observers, $u);
      $this->users[] = $u;
    }
    function removeUser(User $u) {
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

  writeln('BEGIN TESTING OBSERVER PATTERN');
  writeln('');

  $patternGossiper = new clientGroup();
  $patternGossipFan = new NormalUser('2');
$patternGossipFan2 = new PremiumUser('1');
  $patternGossiper->AddUser($patternGossipFan);
$patternGossiper->AddUser($patternGossipFan2);
  $patternGossiper->sendMessage('welcome ');
  $patternGossiper->sendMessage('welcome again');
  $patternGossiper->removeUser($patternGossipFan);
  $patternGossiper->sendMessage('talet message');

  writeln('END TESTING OBSERVER PATTERN');

?>