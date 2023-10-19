<?php
require_once('formHead.php'); 
$stud = new Functions();
$ass = $stud -> getAllAssignment();
?>
        <section>
            <h1>
                ASSIGNMENT LIST
            </h1>
        </section>
        <section>
            <form action="" method="post">
            <label for="dropdown">SELECT A SUBECT: </label>
            <select name="myOption" id="">
                <option value="#">All Subject</option>
                <option value="English">English</option>
                <option value="Math">Math</option>
            </select>
                <input type="submit" name="selectSubject">
            </form>
        </section>
            <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["selectSubject"])) {
            $selectedOption = $_POST["myOption"];
                switch($selectedOption){
                    case '#':
                        $ass = $stud -> getAllAssignment();
                        $sub ="ALL"; 
                        break;
                    case "English":
                        $ass = $stud -> showOnlySubject($selectedOption);
                        $sub ="English"; 
                        break;
                    case "Math":
                        $ass = $stud -> showOnlySubject($selectedOption);
                        $sub ="Math"; 
                        break;
                    default:
                        break;
                }
            }
        }
            ?>
        <section>
            <div class="form">
                <div class="row justify-content-center p-2 m-4">
                    <table class="table">
                        <th>NO:</th>
                        <th>ASSIGNMENT ID</th>
                        <th>ASSIGNMENT NAME</th>
                        <th>SUBJECT</th>
                        <th>ACTION</th>
                    <tbody>
                        <form method="post">
                            <?php
                            $i = 0;
                            foreach ($ass as $id => $data) {
                            $i++;
                                ?>
                            
                            <tr>
                                <td><?php echo $i;  ?></td>
                                <td><?php print_r($data -> id)?></td>
                                <td><?php print_r($data -> assignment_name)?></td>
                                <td><?php print_r($data -> subject)?></td>
                                <td>
                                <input type="submit" value="EDIT" name="EditAssignment[<?php echo $data->id ?>]">
                                <input type="submit" value="DELETE" name="deleteAssignment[<?php echo $data->id ?>]">
                                </td>                  
                            </tr>
                           
                            <?php }?>
                        </form>
                    </tbody>
                </table>
                </div>
            </div>
        </section>
<?php require_once('formFoot.php'); 
?>