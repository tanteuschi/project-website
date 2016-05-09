<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php
        include('standard_head.php');
        include('headstart_head.php');
        ?>

        <style>
            .ui-widget-header {
                background: #e55137;
                border: 1px solid #DDDDDD;
                color: #333333;
                font-weight: bold;
            }
        </style>

    </head>
    <body>

<?php include('header_light.php'); ?>


        <a name="top"></a>
        <a style="padding-top:160px;" name="search"></a>

        <div class="background1 gif">

            <div id="progress" class="mittig">
                <h3 class="waitforit">Your visualization is being created!</h3>
                <div id="progressbar"></div>
                <p>Please be patient, this can take a while...</p>
                <p>While you wait, why don't you check out some of the existing maps below?</p>
            </div>

        </div>

        <div id="discover" style="margin-top:-75px;">
<?php include("discover.php") ?>
        </div>

        <script type="text/javascript">

            $("#progressbar").progressbar();
            var tick_interval = 2;
            var tick_increment = 3;
            var tick_function = function () {
                var value = $("#progressbar").progressbar("option", "value");
                value += tick_increment;
                $("#progressbar").progressbar("option", "value", value);
                if (value < 100) {
                    window.setTimeout(tick_function, tick_interval * 1000);
                } else {
                    //alert("Done");
                }
            };
            window.setTimeout(tick_function, tick_interval * 1000);

<?php
$post_array = json_encode($_POST);
echo "var post_data = " . $post_array . ";\n";
?>

            $.ajax({
                url: "search/server/services/searchPLOS.php",
                type: "POST",
                data: post_data,
                dataType: "json"
            })
                    .done(function (output) {
                        if(output.status == "success") {
                            window.location.replace("vis.php?id=" + output.id + "&query=" + output.query);
                        } else {
                            $("#progress").html("Sorry! Something went wrong. Most likely there are not enough documents for your search - please <a href=\"index.php\">go back and try again.</a>");
                        }
                    })
                    .fail(function () {
                        console.log("error");
                    })
        </script>

<?php
/* $current_url = "http" . (!empty($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $path = substr($current_url, 0, strrpos($current_url, '/') + 1);
  $curl_url = $path . "search/server/services/searchPLOS.php";

  $data = $_POST;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $curl_url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

  $result = curl_exec($ch);

  if ($result != "null" && $result != "") {
  redirect($path . "search/index.php?query=$result->query&id=$result->id");
  } else {
  echo "Sorry! Something went wrong. Most likely there are not enough documents for your search - please <a href=\"index.php\">go back and try again.</a>";
  }

  function redirect($url) {
  if (headers_sent()) {
  die('<script type="text/javascript">window.location=\'' . $url . '\';</script>');
  } else {
  header('Location: ' . $url);
  die();
  }
  } */
?>