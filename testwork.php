


<?php
if ($_POST["button1"]==true)
{
  function procent($a, $b)
  {
    $c = $b*100/$a;
    return round($c, 1);
  }
  $array_in = array(
    'total_count' => (int)$_POST['total_c'],
    'delivered' => (int)$_POST['del'],
    'progress' => (int)$_POST['progr'],
    'fail' => (int)$_POST['f'],
    'open' => (int)$_POST['op'],
    'click' => (int)$_POST['cl']
  );

  if ($array_in['delivered'] + $array_in['progress'] + $array_in['fail'] != $array_in['total_count'])
  {
    echo 'Error! Total count != delivered + progress + fail' . "<br />\n";
  }
  if ($array_in['open'] > $array_in['delivered'])
  {
    echo "Error! Open > delivered" . "<br />\n";
  }
  if ($array_in['click'] > $array_in['open'])
  {
    echo "Error! Click > open" . "<br />\n";
  }

  $progress_o = procent($array_in['total_count'],$array_in['progress']);
  $delivered_o = procent($array_in['total_count'],$array_in['delivered']);
  $fail_o = procent($array_in['total_count'],$array_in['fail']);
  $open_o = procent($array_in['delivered'],$array_in['open']);
  $click_o = procent($array_in['open'],$array_in['click']);

  $array_out = array(
    'progress_out' => $progress_o,
    'delivered_out' => $delivered_o,
    'fail_out' => $fail_o,
    'open_out' => $open_o,
    'click_out' => $click_o
  );

  function check($b)
  {
    if ($b!=0)
    {
      return 5;
    }
    else
    {
      return 10;
    }
  }
  
}
require_once('index.php');
?>
