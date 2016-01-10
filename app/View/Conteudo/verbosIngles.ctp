<? if ($mobile): ?>
    <div data-role="navbar">
        <ul>
            <li><a href="<?= $this->Html->url('/') ?>">Home</a></li>
            <li><a href="<?= $this->Html->url('/cursos') ?>">Cursos</a></li>
            <li><a href="<?= $this->Html->url('/metodo') ?>">Método</a></li>
            <li><a class="ui-btn-active" href="<?= $this->Html->url('/contato') ?>">Contato</a></li>
        </ul>
    </div>
    <div data-role="content">
        Telefone: <span><?= $phone ?></span>
        <br/>
        <br/>
        <span>E-mail: <a style="color: #099;" href="mailto:<?= $email ?>"><?= $email ?></a></span>
        <br/><br/>
        <img src="http://maps.google.com/maps/api/staticmap?center=<?= $lat ?>,<?= $lng ?>&zoom=17&size=400x400&maptype=roadmap&markers=color:red|label:S|<?= $lat ?>,<?= $lng ?>&sensor=false"/>
        <br/><br/>
        <span><?= $address ?> | CEP: <?= $cep ?></span>
        <br/>
    </div>
<? else: ?>
    <div class="main corner-all">
        <h1>Contato</h1>
        <span><?= $phone ?></span>
        <br/>
        <br/>
        <span>E-mail: <a style="color: #099;" href="mailto:<?= $email ?>"><?= $email ?></a></span><br/>
        <div id="map" style="margin: 10px; width: 98%; height: 500px;"></div>
        <span><?= $address ?> | CEP: <?= $cep ?></span><br/>
    </div>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var latlng = new google.maps.LatLng(<?= $lat ?>,<?= $lng ?>);
        var myOptions = {
            zoom: 17,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var marker = new google.maps.Marker({
            'position': new google.maps.LatLng(<?= $lat ?>,<?= $lng ?>),
            'map': map,
            'title': 'Sardonix Idiomas Ltda'
        });
        marker.setMap(map);
    </script>
<? endif ?>