<meta charset="utf-8">
<title>index</title>
<link rel="stylesheet" href="testwork.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
  <script src="js/bootstrap.min.js"></script>
  <div class="wrapper">
    <form method="post" action="testwork.php">
    <div class="inputs">
      <ul>
        <li class=""><input type="text" name="total_c"/> Total count</li>
        <li class=""><input type="text" name="del"/> Delivered</li>
        <li class=""><input type="text" name="progr"/> Progress</li>
        <li class=""><input type="text" name="f"/> Fail</li>
        <li class=""><input type="text" name="op"/> Open</li>
        <li class=""><input type="text" name="cl"/> Click</li>
      </ul>
    </div>
    <div class="begin">
        <input name="button1" type="submit" value="START">
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success" style="width: <?php echo $array_out['delivered_out']/100*90?>%; max-width: 90%;" data-toggle="tooltip" data-placement="bottom" title="Отримали лістів - <?php echo $array_in['delivered']; ?>">
          <?php echo $array_out['delivered_out']; ?>
        </div>
        <div class="progress-bar progress-bar-warning" style="width: <?php echo $array_out['progress_out']/100*90?>%; max-width: 90%;" data-toggle="tooltip" data-placement="bottom" title="Листів відправляються - <?php echo $array_in['progress']; ?>">
          <?php echo $array_out['progress_out']; ?>
        </div>
        <div class="progress-bar progress-bar-danger" style="width: <?php echo $array_out['fail_out']/100*90?>%; max-width: 90%;" data-toggle="tooltip" data-placement="bottom" title="Не дійшло листів - <?php echo $array_in['fail']; ?>">
          <?php echo $array_out['fail_out']; ?>
        </div>
        <div class="progress-bar progress-bar-active" style="width: <?php echo check($array_in['click']) ?>%; max-width: 10%; min-width: 2%;" data-toggle="tooltip" data-placement="bottom" title="Було відкрито листів - <?php echo $array_in['open']; ?>">
          <?php echo $array_out['open_out']; ?>
        </div>
        <div class="progress-bar progress-bar-info" style="width: <?php echo 100-($array_out['delivered_out']/100*90+$array_out['progress_out']/100*90+$array_out['fail_out']/100*90+check($array_in['click'])) ?>%; " data-toggle="tooltip" data-placement="bottom" title="Перейшли по посиланню - <?php echo $array_in['click']; ?>">
          <?php echo $array_out['click_out']; ?>
        </div>
    </div>
    </form>
  </div>
</body>
