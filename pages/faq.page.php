<header id="single-header">
<div class="row">

	<div class="col-md-6">

		<div class="faq">
			<h2 class="text-center sub-title">¿Cómo <strong>funciona</strong>?</h2>
			<p><strong>Santia-go</strong> está basado en <a href="https://github.com/brusselopole/Worldopole" target="_blank">Brusselopole</a> modificado para Santiago por <a href="http://twitter.com/aastroza" target="_blank">Alonso Astroza</a>. La recolección de datos está basada en el sistema también montado por Alonso para <a href="https://twitter.com/PokeAlertasSCL" target="_blank">PokeAlertas</a>, el cual funciona gracias a <a href="https://github.com/favll/pogom" target="_blank">Pogom</a> y <a href="http://www.tweepy.org/" target="_blank">Tweepy</a>.</p>
			<p><strong>Básicamente</strong> tenemos un conjunto de <strong>cuentas de entrenadores virtuales</strong> viajando a lo largo de Santiago (gracias a mini computadores) y alimentando una base de datos centralizada de cada Pokémon encontrado. El sitio usa los datos para construir <strong>estadísticas y mapas de calor</strong>. Además la cuenta de Twitter se encarga de avisar la <strong>aparición de los Pokémon más búscados</strong>.</p>
			<p>Otros datos como los <strong>mejores ataques</strong> y <strong>dulces</strong> fueron agregadas por nosotros manualmente.</p>
		</div>

		<div class="faq">
			<h2 class="text-center sub-title">¿Tienen un radar de <strong>Pokémon</strong>?</h2>
			<p><strong>Si</strong>, pero sólo se usa para recolectar información. El peso del radar hace que sea impracticable usarlo en la mayorías de los dispositivos (incluso es díficil correrlo en nuestros propios computadores).</p>
		</div>


		<div class="faq">
			<h2 class="text-center sub-title">¿Cómo está definida la <strong>rareza</strong>?</h2>
			<p>Se calcula la <strong>rareza</strong> de un Pokémon basandose en la cantidad de veces que ha aparecido en Santiago dentro de las zonas de búsqueda que están definidas. La cuenta de Twitter da notificaciones de los Pokémon más raros y sumando además a los favoritos de la gente (como Pikachu).</p>
		</div>

		<div class="faq">
			<h2 class="text-center sub-title">¿Rastreas a <strong>TODOS</strong> los Pokémon?</h2>
			<p><strong>No</strong>, el sistema está basado en <strong>nodos</strong> que capturan datos desde las <strong>API's de Niantic</strong>. Como sólo hay una cantidad limitada de nodos disponibles sólo se pueden recorrer de manera certera algunas <strong>partes de Santiago</strong>. Estas partes se dividen en <strong>áreas de 10 metros</strong> las que se escanean durante <strong>5 segundos</strong>, luego se escanea la siguiente área de 10 metros y se repite el proceso. Cada área es escaneada al menos una vez cada 15 minutos para <strong>intentar mostrar</strong> todos los pokémon en la zona.</p>
		</div>

		<div class="faq">
			<h2 class="text-center sub-title">¡Vivo en Santiago pero <strong>no veo Pokémon ni PokeAlertas en mi área</strong>!</h2>
			<p>Dije que recorríamos <i>"partes de Santiago"</i>, no <i>"todo Santiago"</i>. ¡Lo siento, si quieres puedes ayudarnos a extender la cobertura!</p>
		</div>



	</div>

	<div class="col-md-6">



		<div class="faq">
			<h2 class="text-center sub-title">¿Puedo <strong>ayudarlos</strong> a cubrir nuevas áreas?</h2>
			<p><strong>Requieres:</strong></p>
			<ul>
				<li>Raspberry Pi 2 o 3</li>
				<li>Cuentas de Pokémon Trainer Club (al menos 3)</li>
				<li>Habilidad para montar un servidor de <a href="https://github.com/favll/pogom" target="_blank">Pogom</a>.</li>
			</ul>
			<p>Una vez que lo tengas funcionando <a href="http://twitter.com/PokeAlertasSCL" target="_blank">contactanos</a>. El servidor puede correr tranquilamente en una Raspberry Pi 2 o 3 en tu casa 😉.</p>
			<p>Si te interesa ayudarnos a expandirnos y/o a mantener el sitio andando, también puedes apoyarnos mediante una donación:</p>
			<table align="center">
				<tbody>
					<tr>
						<td>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHLwYJKoZIhvcNAQcEoIIHIDCCBxwCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYA8z/RN6XUY719PdgNDLzYxT9nwGiANZGUe09GkLcG30pZ23Gn52TTIeF4CHfid2w3EFQM2sQur/ZOSMNW3onwT1lWMh6Nm6dZq6y/Zt43iuBW7RksvDrIakWrI4MYajiK54StPun9LcV8meEhWqHiVODTnw75aKdcOq4kmNk8OKTELMAkGBSsOAwIaBQAwgawGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQIZyiZ9qMioQ2AgYi/oPf5QoXxKTKFBibiW7STQk7i49CkW1sb7zmxxHCmLYSx0XNFQfsciXy4J44z640wFf+pwBkmqgMdjLUbtSovXvNfYSM8SYEZmrXc4hGYDuwV/aEQYfEFbSMgZg2CqYvVJ59t6BiDnWlCv180aJzB+QOAGZQX0i1fOre5R9c4jL2bOrVm0np/oIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTYwODMwMTY0NjE0WjAjBgkqhkiG9w0BCQQxFgQUdTivpihN5AoEotCRGNfqfWWoiYswDQYJKoZIhvcNAQEBBQAEgYBbvKo+shcXw/ZTNmkTqIeZl43v7vcas3idz5RnrYgM+AErTBDMT/KXKZ/DjCB021BYz0wOtAQWHhx9GNYKwBcLEfRnJdynv+zC1HKHLmIuNAD99SNBPSUB1vuMJImYZGfK5Sb2xWvFkMpHPpDDDRVsxxhApPgShYaqYLEysJmKAw==-----END PKCS7-----
								">
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="faq">
			<h2 class="text-center sub-title">¿Cómo puedo armar este sitio pero para <strong>mi propia ciudad</strong> ?</h2>
			<p>Todo el código del sitio está disponible en <a href="https://github.com/brusselopole/Worldopole">Github</a>.</p>
		</div>

		<div class="faq">
			<h2 class="text-center sub-title">¿<strong>Por qué</strong> se les ocurrió esto?</h2>
			<p><strong>Pokémon Go</strong> es un fenómeno mundial y está lleno de <strong>nuevas oportunidades</strong> e ideas para los juegos y la exploración en general. Nos interesa el juego pero más nos interesó en un comienzo <strong>el fenómeno y la parte técnica</strong> que hay detrás. Así que comenzamos a jugar con las <strong>API's de Niantic</strong> sólo para ver que cosas conseguíamos. Se nos ocurrió armar la cuenta de <strong>Twitter</strong> para avisar sobre la aparición de los Pokémon raros en Santiago y hasta <a href="http://www.emol.com/noticias/Tecnologia/2016/08/11/816958/PokeAlertas-La-cuenta-de-Twitter-que-avisa-cuando-un-pokemon-aparece-en-Santiago.html" target="_blank">salimos en el diario</a> mostrando el invento. Como nos motivó tanto la gran respuesta de los seguidores de la cuenta, decidimos montar este sitio web para compartir todos los datos que hemos recolectado, usando el fantástico trabajo que están haciendo la gente tras <strong>Brusselopole</strong>.</p>
		</div>

		<div class="faq">
			<h2 class="text-center sub-title">¿Esto es <strong>legal</strong>?</h2>
			<p><strong>No</strong>. Los Términos de Servicio de Niantic son claros en señalar que <strong>programas externos no pueden usar sus API's</strong> para extraer datos. Este sitio y la cuenta de Twitter son sólo pruebas de concepto (sin ningún fin de lucro) construidas en nuestro tiempo libre.</p>
		</div>

	</div>

</div>
	</header>
