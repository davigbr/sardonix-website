<?= $this->element('header') ?>
<div>
    <div id="googlemaps-container-top"></div>
    <div id="googlemaps" class="google-map google-map-full"></div>
    <div id="googlemaps-container-bottom"></div>
</div>
<div id="wrapper">		
    <div class="container">
        <div class="row">
            <div class="span6">
                <div class="title"><h3>Informações de Contato</h3></div>
                <br/>
                <p>
                    <b>Sardonix Idiomas</b>
                </p>
                <p>	
                    <?= $address ?>
                </p>	
                <p>	
                    Fone: <?= $phone ?>
                </p>
                <p>
                    Email: <?= $email ?>
                </p>
            </div>
            <div class="span6">
                <div class="title"><h3>Siga-nos!</h3></div>
                <ul class="social-bookmarks">
                    <li class="facebook"><a href="http://www.facebook.com/pages/Sardonix-Idiomas/242979139117544">facebook</a></li>
                    <!--<li class="googleplus"><a href="#">googleplus</a></li>-->
                    <!--<li class="skype"><a href="#">skype</a></li>-->
                    <!--<li class="twitter"><a href="#">twitter</a></li>-->
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->element('footer') ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    var latlng = new google.maps.LatLng(<?= $lat ?>,<?= $lng ?>);
    var myOptions = {
        zoom: 17,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("googlemaps"), myOptions);
    var marker = new google.maps.Marker({
        'position': new google.maps.LatLng(<?= $lat ?>,<?= $lng ?>),
        'map': map,
        'title': 'Sardonix Idiomas Ltda'
    });
    marker.setMap(map);
</script>