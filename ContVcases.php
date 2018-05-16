<?php

require_once ("db.php");
require_once ("Mcases.php");
    $obj=Cases::show();
                
    for($i=0;$i<count($obj);$i++)
    {?>
   <script>
$("#casetable").append("<tr><td><a class='m' href=\"EditCase.php?id=<?php echo $obj[$i]->CaseNumber;?>\">تعديل</a></td><td><a class='m' href=\"deleteCase.php?id=<?php echo $obj[$i]->CaseNumber;?>\">مسح</a></td><td><?php echo $obj[$i]->decision;?></td><td><?php echo $obj[$i]->previous_status;?></td><td><?php echo $obj[$i]->Status_ID;?></td><td><?php echo $obj[$i]->hesm_ID;?></td><td><?php echo $obj[$i]->Client_ID;?><?php echo" - ";?> <?php $obj[$i]->ClientType_ID;?></td><td><?php echo $obj[$i]->Lawyer_ID;?></td><td><?php echo $obj[$i]->Date_Of_Case_ID;?></td><td><?php echo $obj[$i]->Dayra_ID;?></td><td><?php echo $obj[$i]->CourtName_ID;?></td><td><?php echo $obj[$i]->Place_Of_Case_ID;?></td><td><?php echo $obj[$i]->Tare5_raf3_eld3wa;?></td><td><?php echo $obj[$i]->CaseType_ID;?></td><td><?php echo $obj[$i]->CaseNumber;?></td></tr>");
</script>
<?php
  } ?>