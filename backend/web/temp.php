
<?php
$days=['Mon','Tue','Wed','Thur','Fri','Sat'];
$size=10;
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<script src="http://admin.local/assets/jquery-1.12.4.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $("button").click(function(){
            var Active = [];
            var unactive = [];
            $.each($("input[name='Active']:checked"), function(){            
                Active.push($(this).val());
            });
            $.each($("input[name='No']:checked"), function(){            
                unactive.push($(this).val());
            });
            $('#active').html("My Active Index are: " + Active.join(", "));
            $('#inactive').html("My unactive Index are: " + unactive.join(", "));

           // alert("My Active Index are: " + Active.join(", "));

        });

    });

</script>

</head>

<body>

    <form>

        <h3>Select your favorite sports:</h3>

        <table border=2>
        <tr>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thur</th>
        <th>Fri</th>
        <th>Sat</th>
        <th>Sun</th>
        </tr>
    <?php
for($i=0;$i<10;$i++){ ?>
    
    <tr>
        <td>
        <label><input type="checkbox" value="Mon[<?= $i ?>]" name="Active"> Active</label>
        <label><input type="checkbox" value="Mon[<?= $i ?>]" name="No"> Inactive</label>
        </td>
        <td>
        <label><input type="checkbox" value="Tue[<?= $i ?>]" name="Active"> Active</label>
        <label><input type="checkbox" value="Tue[<?= $i ?>]" name="No"> Inactive</label>
        </td>
        <td>
        <label><input type="checkbox" value="Wed[<?= $i ?>]" name="Active"> Active</label>
        <label><input type="checkbox" value="Wed[<?= $i ?>]" name="No"> Inactive</label>
        </td>
        <td>
        <label><input type="checkbox" value="Thur[<?= $i ?>]" name="Active"> Active</label>
        <label><input type="checkbox" value="Thur[<?= $i ?>]" name="No"> Inactive</label>
        </td>
        <td>
        <label><input type="checkbox" value="Fri[<?= $i ?>]" name="Active"> Active</label>
        <label><input type="checkbox" value="Fri[<?= $i ?>]" name="No"> Inactive</label>
        </td>
        <td>
        <label><input type="checkbox" value="Sat[<?= $i ?>]" name="Active"> Active</label>
        <label><input type="checkbox" value="Sat[<?= $i ?>]" name="No"> Inactive</label>
        </td>
        <td>
        <label><input type="checkbox" value="Sun[<?= $i ?>]" name="Active"> Active</label>
        <label><input type="checkbox" value="Sun[<?= $i ?>]" name="No"> Inactive</label>
        </td>
        </tr>

<?php }
    ?>
        


        </table>
<div id="active"></div>
<div id="inactive"></div>      

        <br>

        <button type="button">Get Values</button>

    </form>

</body>

</html>

