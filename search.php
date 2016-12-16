<!DOCTYPE HTML><html lang="en">    <head>        <?php        include('head_bootstrap.php');        include('head_standard.php');        include('head_headstart.php');        ?>        <style>            .ui-widget-header {                background: #e55137;                border: 1px solid #DDDDDD;                color: #333333;                font-weight: bold;            }        </style>        <script type="text/javascript">        <?php        $post_array = $_POST;        $date = new DateTime();        $post_array["today"] = $date->format('Y-m-d');                $post_data = json_encode($post_array);        echo "var post_data = " . $post_data . ";\n";        ?>                        var script = "";            var vis_page = "";            var service = "<?php echo $_GET["service"] ?>";                        var tick_interval = 1;            var tick_increment = 2;            var milliseconds = 500;                        switch(service) {                case "doaj":                    script = "searchDOAJ.php";                    break;                                case "plos":                    script = "searchPLOS.php";                    milliseconds = 600;                    break;                                    case "pubmed":                    script = "searchPubmed.php";                    break;                                    default:                    script = "searchDOAJ.php"            }                        $.ajax({                url: "search/server/services/" + script,                type: "POST",                data: post_data,                dataType: "json"            })                    .done(function (output) {                        if (output.status == "success") {                                                        $("#progressbar").progressbar("option", "value", 100);                            window.clearTimeout(progessbar_timeout);                            window.location.replace("vis.php?id=" + output.id + "&query=" + output.query + "&service=" + service);                        } else {                            $("#progress").html("Sorry! Something went wrong. Most likely there are not enough documents for your search - please <a href=\"index.php\">go back and try again.</a>");                        }                    })                    .fail(function () {                        console.log("error");                        $("#progress").html("Sorry! Something went wrong. Please <a href=\"index.php\">try again</a> in a few minutes.");                    })        </script>    </head>    <body>        <?php include('header_light.php'); ?>        <a name="top"></a>        <a style="padding-top:160px;" name="search"></a>        <div class="background-lamp gif">            <div id="progress" class="mittig">                <h3 class="waitforit">Your visualization is being created!</h3>                <div id="progressbar"></div>                <p id="status">Please be patient, this takes around 15 seconds.</p>                <p>While you wait, why don't you check out user reactions or read about how OK Maps works?</p>            </div>        </div>        <div id="discover" style="margin-top:-75px;">            <?php include("feedback.php") ?>            <?php include("howitworks.php") ?>        </div>        <script type="text/javascript">            $("#progressbar").progressbar();            $("#progressbar").progressbar("value", 2);            var tick_function = function () {                var value = $("#progressbar").progressbar("option", "value");                value += tick_increment;                $("#progressbar").progressbar("option", "value", value);                                progessbar_timeout = window.setTimeout(tick_function, tick_interval * milliseconds);                                if (value >= 100) {                    $("#status").html("<span style='color:red'>Creating your visualization takes longer than expected. Please stay tuned!</span>")                                        $("#progressbar").progressbar("value", 5);                }            };                        var progessbar_timeout = window.setTimeout(tick_function, tick_interval * milliseconds);        </script>