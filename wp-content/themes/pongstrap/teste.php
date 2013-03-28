<?php
/** _teste.php
 *
 * Template Name: teste
 *
 * @author 	Rafael D´Alessandro Pires
 * @package pongstrap
 * @since	1.3.0	- 29.04.2012
 */

echo 'onload="initialize()" onunload="GUnload()"';
?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<div id="contact-content">

            <script type="text/javascript">
            function initialize() {

                var leeds = new google.maps.LatLng(53.80583, -1.548903);

                var firstLatlng = new google.maps.LatLng(53.80583, -1.548903);              

                var firstOptions = {
                    zoom: 16,
                    center: firstLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP 
                };

                var map = new google.maps.Map(document.getElementById("map_leeds"), firstOptions);

                firstmarker = new google.maps.Marker({
                    map:map,
                    draggable:false,
                    animation: google.maps.Animation.DROP,
                    title: 'Your Client',
                    position: leeds
                });

                var contentString1 = '<p>The Address<br />Of your client<br />in<br />here</p>';


                var infowindow1 = new google.maps.InfoWindow({
                    content: contentString1
                });

                google.maps.event.addListener(firstmarker, 'click', function() {
                    infowindow1.open(map,firstmarker);
                });

            }
            </script>

            <div class="map">

                <div id="map_leeds" style="width: 600px; height: 600px"></div>  

            </div>

        </div>  
