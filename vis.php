<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <?php include ("standard_head.php"); ?>
            <script type="text/javascript" src="search_plos/vis/vis.js"></script>
    </head>

    <body style="margin:0px; padding:0px">
        
        <?php include ("header_search.php"); ?>
        <!--<div id="empty" style="padding-top:70px;"></div>-->
        <div id="visualization" style="padding-top:70px; background-color:white;"></div>
        <script>
                
                var height = ($(document).height() - 68 < 675)?(675):($(document).height() - 68);
                var width =  ($(document).width() < 675)?(675):($(document).width())
                
                var div_height = height;
                $("#visualization").css("height", div_height + "px");
                
                var myHeadstart = new Headstart(
                        "http://localhost/" //host
                        , "project-website/search_plos/" //path
                        , "visualization" //append to tag
                        , [{
                                title: "dna"
                                , file: "<?php echo $_GET["id"] ?>"
                            }
                            ] //data
                        , {title: "Overview of PLOS articles for <?php echo (!isset($_GET["query"])?($_GET["id"]):($_GET["query"])) ?>"
                            , width: width
                            , height: height
                            , max_diameter_size: 45
                            , min_diameter_size: 25
                            , max_area_size: 90
                            , min_area_size: 50
                            , use_area_uri: true
                            , input_format: "json"
                            , base_unit: "views"
                            , show_timeline: false
                            , show_dropdown: false
                            , force_areas: true
                            , preview_type: "pdf"
                            , sort_options: ["readers", "title", "authors"]
                            , localization: "eng_plos"
                            , force_areas_alpha: 0.015
                            , show_list: false
                            } //options
                )
        </script>

         <div style="background-color: white"><p>Built with <a href="http://github.com/pkraker/Headstart" target="_blank">Headstart</a> and <a href="http://github.com/ropensci/rplos" target="_blank">rplos</a>. Content and metadata retrieved from <a href="https://www.plos.org/publications/journals/" target="_blank">Public Library of Science Journals</a>.
        </div>

		<?php include('footer.php'); ?>