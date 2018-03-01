@extends ('modules.cabecera')
@section ('content')			
<div class="container mt-5 mb-5 ">
	<div class="col">
		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis molestiae, beatae assumenda at, facilis consectetur distinctio labore fuga tenetur totam reiciendis, soluta repudiandae aperiam aspernatur? Aperiam praesentium provident nam officia.</div>
		<div>Minima nihil placeat eos ut consequuntur aliquam magnam provident incidunt soluta magni in tempora asperiores ducimus unde culpa, odit necessitatibus sed tempore esse, nulla totam quas dolor nesciunt harum at!</div>
		<div>Reprehenderit voluptates, facilis ipsa laborum aperiam, quisquam molestias a. Non soluta, temporibus nulla. Eaque esse voluptatem placeat obcaecati, sed adipisci doloremque fuga modi aut, est ut laudantium, reprehenderit, ad quisquam?</div>
		<div>Totam animi cumque doloremque, est corporis aspernatur voluptatibus necessitatibus non aliquam adipisci! Illo earum consequuntur reprehenderit tempora eius doloribus, quaerat corporis nesciunt fuga repellendus rem, architecto deserunt incidunt qui non.</div>
		<div>Libero, aperiam corporis? Animi sequi placeat eos eum facilis laborum amet dolor explicabo fuga ullam accusantium harum aut voluptatibus iste velit rem quisquam tenetur, illo quo architecto hic ipsa incidunt.</div>
		<div>Ut excepturi labore debitis cupiditate, assumenda consequatur eligendi possimus quibusdam, earum nemo optio officiis! Quod dolorem, consectetur, fugit sunt illo, vitae, quia sequi itaque fugiat sapiente doloribus qui aut maxime!</div>
		<div>Error laborum voluptate fuga est, excepturi, omnis, hic optio ab odio nobis nulla dolorum, ratione beatae repudiandae. Dolor debitis sit aut, nesciunt, temporibus odio voluptatum, delectus eaque veniam animi veritatis.</div>
		<div>Explicabo quaerat dolorum aperiam ad commodi tempora numquam ea molestias obcaecati sint fuga sapiente, sed beatae labore iure, possimus voluptate illum ab quos quis in quidem tenetur aliquam totam iusto.</div>
	</div>
	<div class="row justify-content-around align-items-center no-gutters ">

		<div class="col-md-4 btn-max bg1 img-bg2 m-3 border-radius-10" >
			<a href="{{ route('registro.index') }}" >
				<div class="content-text border-radius-10 color-white align-items-center no-gutters justify-content-center row">
					<h3 class="color-white"><b>Registro</b></h3>
				</div>
			</a>
		</div>

		<div class="col-md-4 btn-max bg1 img-bg1 m-3 border-radius-10" >
			<a href="index.php?action=contacto" >
				<div class="content-text border-radius-10 color-white align-items-center no-gutters justify-content-center row">
					<h3 class="color-white"><b>Contáctanos</b></h3>
				</div>
			</a>
		</div>
	</div>
	<div class="row justify-content-center mt-4">
		<div class="col">
			<div class="row justify-content-center redes-rive">
				<div class="col col-md-2 txcenter">
					<a href="#" target="_blank" class=""> 
						<img src="{{ asset('img/instagram_b.png') }}" class="img-hor">
						@RIVE
					</a>
				</div>
				<div class="col col-md-2 txcenter"> 
					<a href="#" target="_blank">
						<img src="{{ asset('img/twitter_b.png') }}" class="img-hor">
						@Rive
					</a>
				</div>
				<div class="col col-md-2 txcenter">
					<a href="#" target="_blank">
						<img src="{{ asset('img/facebook_b.png')}}" class="img-hor">
						Rive
					</a>
				</div>
			</div>
		</div>
	</div>		</div>


</div>

@stop