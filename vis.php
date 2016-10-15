<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <?php include ("head_standard.php"); ?>
    </head>

    <body style="margin:0px; padding:0px">
        
        <?php include ("header_search.php"); ?>
        <!--<div id="empty" style="padding-top:70px;"></div>-->
        <div id="visualization" style="padding-top:78px; background-color:white;"></div>
        <?php
            $credit = "";
        
            if(!isset($_GET['service'])) {
                echo '<script type="text/javascript" src="data-config_plos.js"></script>';
                $credit = '<a href="http://github.com/ropensci/rplos" target="_blank">rplos</a>. Content and metadata retrieved from <a href="https://www.plos.org/publications/journals/" target="_blank">Public Library of Science Journals</a>';
            } else {
                if ($_GET['service'] === "plos") {
                    $credit = '<a href="http://github.com/ropensci/rplos" target="_blank">rplos</a>. Content and metadata retrieved from <a href="https://www.plos.org/publications/journals/" target="_blank">Public Library of Science Journals</a>';
                    echo '<script type="text/javascript" src="data-config_plos.js"></script>';
                } else if ($_GET['service'] === "pubmed") {
                    $credit = '<a href="https://github.com/ropensci/rentrez " target="_blank ">rentrez</a>. All content retrieved from <a href="http://www.ncbi.nlm.nih.gov/pubmed " target="_blank ">PubMed</a>';
                    echo '<script type="text/javascript" src="data-config_pubmed.js"></script>';
                } else if ($_GET['service'] === "doaj") {
                    $credit = '<a href="https://github.com/ropenscilabs/jaod " target="_blank ">jaod</a>. All content retrieved from <a href="http://www.ncbi.nlm.nih.gov/pubmed " target="_blank ">DOAJ</a>.';
                    echo '<script type="text/javascript" src="data-config_doaj.js"></script>';
                }
            }
        ?>
        <script>
                var div_height = ($(document).height() < 750)?(750):($(document).height());
                $("#visualization").css("height", div_height + "px")
            
                data_config.server_url = "http://localhost/project-website/search/server/";
        	data_config.title = <?php echo json_encode($_GET['query']) ?>;
        	data_config.files = [{
        		title: <?php echo json_encode($_GET['query']) ?>,
        		file: <?php echo json_encode($_GET['id']) ?>
        	}]
        </script>
        <script type="text/javascript" src="search/dist/bundle.js"></script>

         <div style="background-color: white">Built with <a href="http://github.com/pkraker/Headstart" target="_blank">Headstart</a> and <?php echo $credit ?>
        </div>

		<?php include('footer.php'); ?>