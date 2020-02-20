<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>FPL Stats</title>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css"/>
</head>

<?php
$json=file_get_contents("https://fantasy.premierleague.com/api/bootstrap-static/");

$data = json_decode($json, true);

$clubs = array("Index", "Arsenal", "Aston Villa", "Bournemouth", "Brighton", "Burnley", "Chelsea", "Crystal Palace", "Everton", "Leicester", "Liverpool", "Man City", "Man Utd", "Newcastle", "Norwich", "Sheff Utd", "Southampton", "Tottenham", "Watford", "West Ham", "Wolves");


?>


<body>
<table id="player_info" class="display table table-striped table-bordered" style="width:100%">
  <thead>
  <tr>
    <th>Name</th>
    <th>Club</th>
    <th>Points</th>
    <th>Price</th>
    <th>% Owned</th>
    <th>Goals</th>
    <th>Assists</th>
  </tr>
</thead>
<tbody>
  <?PHP
foreach($data['elements'] as $item)

{
 ?>

  <tr>
    <td>
      <?PHP echo $item['web_name']; ?>
    </td>
    <td>
      <?PHP echo $clubs[$item['team']]; ?>
    </td>
    <td>
      <?PHP echo $item['total_points']; ?>
    </td>
    <td>
      <?PHP echo $item['now_cost']/10; ?>
    </td>
    <td>
      <?PHP echo $item['selected_by_percent']; ?>
    </td>
    <td>
      <?PHP echo $item['goals_scored']; ?>
    </td>
    <td>
      <?PHP echo $item['assists']; ?>
    </td>
  </tr>
  <?PHP
}
?>
</tbody>
</table>

<script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript" src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="init.js"></script>
</body>
</html>
