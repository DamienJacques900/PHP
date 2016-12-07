<html>
  	<head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css"  href="style/test.css"/>

  	</head>
  	<body>
      <div id="contenu">
      	<h1 id="titre">Bienvenue !</h1>
      	<p id="heure">Il est actuellement
      		<?php
        			$heure = date('H:i');
        			echo $heure;
      		?>
  			sur le serveur et 
        <script>
        var d = new Date();
        document.write(d.toLocaleTimeString());
          </script>
        sur le navigateur et tout va très bien. Et nous sommes le 
        <?php
            $jour = date('j/m/Y');
            echo $jour;
        ?>.
  		</p>
      <p>C’est 
        <?php
          $jour = date('j');
          if ($jour < 15)
            echo 'le début';
          else
            echo 'la fin';
        ?>
         du mois.</p>
      <!--<img style="display:block; margin:auto;" src="../Images/elephpant.png"> marche aussi-->
      <img id="elephpant" src="http://etu28300.esy.es/www/Images/elephpant.png">
      <p class="lorem"><span class="lettrine">L</span>orem ipsum dolor sit amet, consectetur adipiscing elit. In mattis orci magna.
        Aenean sit amet libero vitae libero tincidunt mattis ac vitae ex. Aliquam ut metus
         et quam ullamcorper bibendum ut nec metus. In hac habitasse platea dictumst. 
         Suspendisse potenti. Suspendisse tempor non diam sit amet auctor. Pellentesque habitant 
         morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam dapibus arcu 
         id est tempus euismod. Nullam non arcu dolor. Vestibulum metus tortor, vestibulum sed suscipit
          quis, sollicitudin eu lacus. Sed vel magna id ex finibus venenatis convallis non libero.
      </p>

      <p class="lorem"><span class="lettrine">I</span>n in dolor sed mi cursus lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et
       ultrices posuere cubilia Curae; Donec sagittis consequat consequat. Proin at risus elit. In maximus
        iaculis mattis. Nam dictum iaculis tortor. Suspendisse tellus est, ullamcorper quis lobortis maximus,
         scelerisque a elit. Praesent consequat ac elit ac congue. Nulla id volutpat est. Cras est nibh, 
         sodales a faucibus ut, gravida sed ipsum. Fusce quam purus, elementum id tellus sed, vestibulum
         ornare ipsum. Fusce quis mattis enim, commodo mollis risus. Morbi pulvinar eget libero sed volutpat.
          Curabitur lobortis nisi eget nisl cursus, ac lobortis mauris sagittis. Donec lacinia libero quis tempor lacinia.
      </p>

      <p class="lorem"><span class="lettrine">I</span>n id libero fermentum, iaculis lectus a, pharetra neque. Morbi ornare eget dolor vitae mollis. Integer
       interdum convallis eros, vitae finibus mi mollis a. Morbi vel neque vel odio blandit consequat ut semper elit.
        Vestibulum pretium ultrices bibendum. Praesent quam velit, consequat eget magna viverra, pellentesque varius nibh.
         Fusce laoreet elementum nisi in sodales. Phasellus sed ipsum ac nibh venenatis fringilla. Vivamus bibendum velit
          eget lobortis vulputate. Morbi nec porttitor nulla, quis convallis tortor. Nulla eget ante tincidunt, vulputate
           lectus id, vehicula arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed mauris elit, fermentum
           sed purus eget, scelerisque congue mauris. In tempor augue sed nibh consequat vehicula.
      </p>

      <p class="lorem"><span class="lettrine">A</span>enean vel felis consequat, pharetra erat eu, dignissim augue. Donec eu neque a arcu porttitor vulputate. 
        Sed cursus lacinia scelerisque. Pellentesque tempor porta mauris eget gravida. Fusce sed dui vel orci aliquet 
        finibus. Aenean felis urna, pulvinar eget pulvinar sed, vulputate eu tellus. Duis et mi vulputate, lacinia elit
         sit amet, finibus diam. Sed euismod nunc nisi, sed aliquam mi rhoncus nec.
      </p>

      <p class="lorem"><span class="lettrine">P</span>hasellus cursus vel dolor id efficitur. In scelerisque, neque vel ultrices imperdiet, justo dolor hendrerit risus,
       id pharetra arcu sem non ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam commodo, purus
        a sagittis accumsan, arcu metus vestibulum nibh, in convallis erat quam at magna. Donec ullamcorper egestas purus,
         et tempus tellus vulputate vitae. Morbi cursus et risus id faucibus. Phasellus consectetur eu nisl at fermentum. Cum 
         sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pretium ipsum in aliquet blandit.
          In porttitor nec nisl quis suscipit. Praesent at enim non nulla mattis ultricies et eget quam. Pellentesque lobortis id
           magna non lacinia. Aliquam ut porttitor sem. Vestibulum vitae magna ac ligula viverra bibendum. Class aptent taciti 
           sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
      </p>

    </div>

	</body>
</html>