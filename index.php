<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Translate</title>

    </head>
    <body>	

        <div class="span8">
			<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>		
            <div id="google_translate_element"></div> 
            

            <br />
            
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="nav">
                        <li><a href="javascript:void(0)" id="pt_barraidioma" class="pt" onclick="ChangeLang('pt')" title="Traduzir para portugu&ecirc;s"><img src="images/portugues.gif" border="0" alt="Portugues" /></a></li>
                        <li><a href="javascript:void(0)" id="en_barraidioma" class="en" onclick="ChangeLang('en')" title="Translate to English"><img src="images/english.gif" border="0" alt="English" /></a></li>
                        <li><a href="javascript:void(0)" id="es_barraidioma" class="es" onclick="ChangeLang('es')" title="Traducir al espa&ntilde;ol"><img src="images/espanol.gif" border="0" alt="Spanish" /></a></li>
                        <li><a href="javascript:void(0)" id="it_barraidioma" class="it" onclick="ChangeLang('it')" title="Traduci in italiano"><img src="images/italiano.png" border="0" alt="Italian" /></a></li>
                        <li><a href="javascript:void(0)" id="de_barraidioma" class="de" onclick="ChangeLang('de')" title="&Uuml;bersetzen in Deutsch"><img src="images/alemao.png" border="0" alt="Deutsch" /></a></li>
                        <li><a href="javascript:void(0)" id="fr_barraidioma" class="fr" onclick="ChangeLang('fr')" title="Traduire en fran&ccedil;ais"><img src="images/frances.png" border="0" alt="French" /></a></li>
                    </ul>
                </div>
            </div>

            <br />
            
            <p class="alert alert-info">
                Eu te peço perdão por te amar de repente
                Embora o meu amor
                seja uma velha canção nos teus ouvidos
                Das horas que passei à sombra dos teus gestos
                Bebendo em tua boca o perfume dos sorrisos
                Das noites que vivi acalentando
                Pela graça indizível
                dos teus passos eternamente fugindo
                Trago a doçura
                dos que aceitam melancolicamente.
                E posso te dizer
                que o grande afeto que te deixo
                Não traz o exaspero das lágrimas
                nem a fascinação das promessas
                Nem as misteriosas palavras
                dos véus da alma...
                É um sossego, uma unção,
                um transbordamento de carícias
                E só te pede que te repouses quieta,
                muito quieta
                E deixes que as mãos cálidas da noite
                encontrem sem fatalidade
                o olhar estático da aurora.
            </p>
        </div>

			
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
        <script type="text/javascript" src="js/tradutor.js"></script>
        <link href="css/main.css" rel="stylesheet" />
        <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
		$(window).load(function () {
			var idioma = '<?php if(isset($_GET["idioma"])){echo $_GET["idioma"];}?>';
			if(idioma != undefined && idioma != ""){
				$("#" + idioma + "_barraidioma").trigger("click");
			}else{
				$("#pt_barraidioma").trigger("click");
			}
		});
		</script>		
    </body>
</html>